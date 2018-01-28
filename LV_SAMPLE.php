<?PHP 

if(!isset($_POST['id']))
{
	
?>
    <script>   
    window.location.href="admin.php?x=SALES%20INVOICES";
    </script>
<?PHP
}
else
{
$sample = $_POST['id'];
$_SESSION["invoiceId_submit"] = $sample;
}

echo $sample;

frm_add_itemsinvo();

?>