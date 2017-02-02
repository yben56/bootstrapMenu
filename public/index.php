<?PHP
require_once("../app/libs/bootstrapMenu.php");

$menu = array(
	"Link1"=>"#1",
	"Link2"=>array("Link2_1"=>"#2_1", "Link2_2"=>array("Link2_2_a"=>"#2_2_a", "Link2_2_b"=>"#2_2_b")),
	"Link3"=>"#3",
	"Link4"=>array("Link4_1"=>"#4_1", "Link4_2"=>"#4_2"),
);
?>

<link href="https://fonts.googleapis.com/css?family=Heebo:100,300,500" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.js"></script>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="css/main.css" rel="stylesheet" />

<div class="container">
	<div class="row">
        <div class="col-sm-12">
            <span class="title">BOOTSTRAP MENU</span>
            <p class="description">This plugin required jQuery, Bootstrap.<br />(under MIT Licence)</p>
        </div>
    </div>
    
    <div class="row">
    	<div class="col-sm-10"><?PHP require_once("collapsed.php");?></div>
    </div>
    
    <div class="row"><div class="col-sm-12"><b>horizontal</b></div></div>
    <div class="row"><div id="horizontal" class="col-sm-12"><?PHP bootstrapMenu("nav", $menu, true); ?></div></div>
    
    <div class="row"><div class="col-sm-12"><hr /></div></div>
    
    <div class="row"><div class="col-sm-12"><b>Vertical</b></div></div>
    <div class="row"><div class="col-sm-12"><?PHP bootstrapMenu("nav2", $menu);?></div></div>
</div>