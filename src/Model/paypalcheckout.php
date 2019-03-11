<?php
// Cambiar redireccion de la URL y asignar un token para nuestra BBDD
define('paypalMode',0);

  if(paypalMode){
      define("PayPalClientId", "AcfZLNVkg2Edvq8Ju6LpLJLIy03LPCFne1QCXLAwtNIAygmI3TP2UHGF-HrzzUR16eg34ymjpajUhZkF");
      define("PayPalSecret", "EAbE8wYxMkDxYTFUxNc08dZWf94xtHtAlUA2_RgyePHynXrrHuvnY9yjW7ZghagPGjX8f9CtNfMUN_Dd");
      define("PayPalBaseUrl", "https://api.paypal.com/v1/");
      define("PayPalENV", "production");
  } else {
      define("PayPalClientId", "AcfZLNVkg2Edvq8Ju6LpLJLIy03LPCFne1QCXLAwtNIAygmI3TP2UHGF-HrzzUR16eg34ymjpajUhZkF");
      define("PayPalSecret", "EAbE8wYxMkDxYTFUxNc08dZWf94xtHtAlUA2_RgyePHynXrrHuvnY9yjW7ZghagPGjX8f9CtNfMUN_Dd");
    //   define("PayPalBaseUrl", "https://api.sandbox.paypal.com/v1/");
      define("PayPalBaseUrl", "/usuario/inicio");
      define("PayPalENV", "sandbox");
  }

?>
<div id="paypal-button-container"></div>
<div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>



<script>
paypal.Button.render({
  env: '<?= PayPalENV; ?>',
  client: {
    <?php if(paypalMode) { ?>  
    production: '<?= PayPalClientId; ?>'
    <?php } else { ?>
    sandbox: '<?= PayPalClientId; ?>'
    <?php } ?>  
  },
  payment: function (data, actions) {
    return actions.payment.create({
      transactions: [{
        amount: {
          total: '<?= $precio_producto?>',
          currency: 'EUR'
        }
      }]
    });
  },
  onAuthorize: function (data, actions) {
    return actions.payment.execute()
      .then(function () {
        window.location = "<?php echo PayPalBaseUrl ?>orderDetails.php?p0aymentID="+data.paymentID+"&payerID="+data.payerID+"&token="+data.paymentToken+"&pid=<?php echo $id_producto; ?>";
      });
  }
}, '#paypal-button');
</script>
