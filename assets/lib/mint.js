// Pulls the NFT info for creation from the form and validates it

function pull_nft_info() {
  let initial_cur = $("#initial_backing").val();
  let initial_fracs = $("#initial_fractions").val();
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
	$("#create-nft").click(function() {
		if (checkConnection()) {
			var contract = window.tronWeb.contract(abi_forge, active.address);
      try {

      } catch (err) {

      }
    }
  });
});
