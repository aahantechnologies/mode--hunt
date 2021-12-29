
<?php  
session_start();
define('MERCHANT_KEY', 'B1jZZGUQ');
define('SALT', 'Xeqgap9sYU');
//define('PAYU_BASE_URL', 'https://test.payu.in');    //Testing url
define('PAYU_BASE_URL', 'https://secure.payu.in');  //actual URL
define('SUCCESS_URL', 'http://aahantechnologies.com/ModelHunt/php/admin/success.php');  //have complete url
define('FAIL_URL', 'http://aahantechnologies.com/ModelHunt/php/admin/failure.php');    //add complete url 
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$email = $_REQUEST["email"];
$mobile = $_REQUEST["contact"];
$firstName =  'demo';
$lastName =  'cool';
$totalCost = $_REQUEST['price'];
$hash         = '';
//Below is the required format need to hash it and send it across payumoney page. UDF means User Define Fields.
//$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hash_string = MERCHANT_KEY."|".$txnid."|".$totalCost."|"."productinfo|".$firstName."|".$email."|||||||||||".SALT;
$hash = strtolower(hash('sha512', $hash_string));
$action = PAYU_BASE_URL . '/_payment'; 

?>
<form action="<?php echo $action; ?>" method="post" name="payuForm" id="payuForm" style="display: none">
    <input type="hidden" name="key" value="<?php echo MERCHANT_KEY ?>" />
    <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
    <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
    <input name="amount" type="number" value="<?php echo $_REQUEST['price']; ?>" />
    <input type="text" name="firstname" id="firstname" value="demo" />
    <input type="email" name="email" id="email" value="<?php echo $_REQUEST["email"]; ?>" />
    <input type="text" name="phone" value="<?php echo $_REQUEST["contact"]; ?>" />
    <textarea name="productinfo"><?php echo "productinfo"; ?></textarea>
    <input type="text" name="surl" value="<?php echo SUCCESS_URL; ?>" />
    <input type="text" name="furl" value="<?php echo  FAIL_URL?>"/>
    <input type="text" name="service_provider" value="payu_paisa"/>
    <input type="text" name="lastname" id="lastname" value="cool" />
    </form>
  <script type="text/javascript">
    var payuForm = document.forms.payuForm;
    payuForm.submit();
</script>