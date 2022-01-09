// Pulls the NFT info for creation from the form and validates it

var cur_nft_addr = "TFhqHsExxjeDuz931Sw8dhA9QdZEuPGe9A";
var minimum_backing = 0;

function pull_nft_info() {
  if (!$("#termsCheck").prop("checked")) throw new Error("nft-check-tos");
  let nft_data = [];
  nft_data.initial_cur = Number($("#initial_backing").val());
  if (!nft.initial_cur.isInteger()) throw new Error("nft-backing-notint");
  if (nft_data.initial_cur < minimum_backing) throw new Error("nft-insufficient-backing");
  nft_data.initial_fracs = Number($("#initial_fractions").val());
  if (!nft_data.initial_fracs.isInteger()) throw new Error("nft-fractions-notint");
  if (nft_data.initial_fracs < 0) throw new Error("nft-fractions-negative");
  nft_data.allow_fractions = $("#moreFrac");
  // Still have to handle media stuff
  return nft_data;
}

$(document).ready(function() {
  function checkConnection() {
	  if (!window.tronWeb) {
	    return false;
	  }
	  if (!window.tronWeb.defaultAddress.base58) {
	    return false;
	  }
	  return true;
	}
  if (checkConnection()) {
    $("#receiver_address").value = window.tronWeb.defaultAddress;
  }
  // Choose which UI to have visible: will eventually be replaced with a dynamic function when projects can be added on the fly
  $("#proj-select-curnft").click(function () {
    $("#curnft-mint").show();
    $("#cmdtitles-mint").hide();
  });
  $("#proj-select-cmdtitles").click(function () {
    $("#cmdtitles-mint").show();
    $("#curnft-mint").hide();
  });

	$("#create-nft").click(function() {
		if (checkConnection()) {
			var contract = window.tronWeb.contract(cur_nft_abi, cur_nft_addr);
      console.log("Creating NFT");
      try {
        let nft = pull_nft_info();
        console.log(nft);
        contract.createNFT(nft.initial_backing, nft.initial_fracs, nft.allow_fractions).call().then(function(res) {
          console.log(res);
        });
      } catch (err) {
        console.log(err);
      }
    }
  });
});
