// Pulls the NFT info for creation from the form and validates it

var cur_nft_addr = "TFhqHsExxjeDuz931Sw8dhA9QdZEuPGe9A";
var minimum_backing = 0;

// Source: https://web.dev/read-files/
// Need to do this differently for the preview image and the main - and I want to include a progress bar when loading a large media file
function readFile(file, onLoad) {
  const reader = new FileReader();
  reader.addEventListener('load', (event) => {
    const result = event.target.result;
    onLoad(result);
  });

  reader.addEventListener('progress', (event) => {
    if (event.loaded && event.total) {
      const percent = (event.loaded / event.total) * 100;
      console.log(`Progress: ${Math.round(percent)}`);
    }
  });
  reader.readAsDataURL(file);
}

function select_image() {
  let img = $("#image_select");
  img.src = 'data:image/jpeg;base64,' + btoa(image_data);
}

function pull_nft_info() {
  if (!$("#termsCheck").prop("checked")) throw new Error("nft-check-tos");
  let nft_data = [];
  nft_data.initial_cur = Number($("#initial_backing").val());
  if (!Number.isInteger(nft_data.initial_cur)) throw new Error("nft-backing-notint");
  if (nft_data.initial_cur < minimum_backing) throw new Error("nft-insufficient-backing");
  nft_data.initial_fracs = Number($("#initial_fractions").val());
  if (!Number.isInteger(nft_data.initial_fracs)) throw new Error("nft-fractions-notint");
  if (nft_data.initial_fracs < 0) throw new Error("nft-fractions-negative");
  nft_data.allow_fractions = $("#moreFrac").prop("checked");
  nft_data.receiver_address = $("#receiver_address").val();
  if (!window.tronWeb.utils.isAddress(nft_data.receiver_address)) throw new Error("#nft-invalid-receiver");
  // Still have to handle media stuff
  return nft_data;
}

$(document).ready(function() {
  // Prevent form submission via enter, etc.
  $("#image_select").click(function(e){
   e.preventDefault();
   // Call file select and load image
   $('#image_file').trigger('click');
  });
  $(window).keydown(function(event){
    if(event.keyCode == 13 || event.keyCode == 32) {
      // Will adjust to allow submission if all form elements are valid
      event.preventDefault();
      return false;
    }
  });
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

  $("#image_file").change(function() {
    let file = $("#image_file")[0].files[0];
    if (file != null) {
      console.log(file);
      readFile(file, function(res) {

      });
    } else {
    }
  });

  $("#media_select").change(function() {
    let file = $("#media_select")[0].files[0];
    if (file != null) {
      console.log(file);
      readFile(file);
    } else {
    }
  });

	$("#create-nft").click(function() {
		if (checkConnection()) {
			var contract = window.tronWeb.contract(cur_nft_abi, cur_nft_addr);
      console.log("Creating NFT");
      try {
        let nft = pull_nft_info();
        // For now it'll just go directly, but a popup that gives all the details of the NFT about to be created and asks for confirmation would be nice
        contract.createNFT(nft.initial_cur, nft.initial_fracs, nft.allow_fractions, nft.receiver_address).send().then(function(res) {
          console.log(res);

          // Next step is to generate the json data and upload preview image and media
        });
      } catch (err) {
        console.log(err);
      }
    }
  });
});
