<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Document</title>
  </head>
  <body>
    <?php
    $catergories = array(
        'Electronics' =>
            array('Mobliephone', 'computer', 'tv', 'camera', 'aircondition', ),
        'vehicals' => array('car', 'motorbike', 'van', 'boat', ), 'properties' =>
            array('land', 'house', 'apartment', 'rooms', ), 'home and garden' =>
            array('garden', 'home decor', 'kitchen item', ), 'fashion and beauty' =>
            array('bag', 'jewellery', 'watches', ), 'hobby and sports' => array('musical
    instruments', 'sports eqipments', 'travel', ),
    ); ?>

    <script>
       //////////////////display subcatergories//////////////
              function subcat(cat){
                  var arr = <?php echo json_encode($catergories); ?>;
                   var catType=cat.getAttribute("data-cat-type");
                      var xv =arr[catType];
                      var text="";
                      var i;
                      for (i = 0; i < xv.length; i++) {
                          text += '<li onclick="catd(this)" data-cats-type="'+ xv[i] +'"><b>'+ xv[i] + "</b></li>";
                      }


              document.getElementById("subcatergories").innerHTML=text;


                   };
      //////////////////////////////////////////////
      function breadcrumcat(cat){
                  var arr = <?php echo json_encode($catergories); ?>;
                      var catbType = cat.getAttribute("data-cat-type");
                      document.getElementById("breadcrumdisplay").innerHTML=catbType;
      };

         //////////////////////////////////////////
              function catall(){


              var arry = <?php echo json_encode($catergories) ?>;
              var keys = [];
         for(var k in arry) keys.push(k);{
         var i;
         var text="";
                      for (i = 0; i < keys.length; i++) {
                          text += '<li onclick="breadcrumcat(this);subcat(this)" data-cat-type="'+keys[i]+'"><b>' + keys[i] + "</b></li>";
                      }
         document.getElementById("subcatergories").innerHTML=text;



              }
      };
              /////////////////
                  function catd(cats){
      var catdType = cats.getAttribute("data-cats-type");
      console.log(catdType)
      var vv=document.getElementById("catergories").innerHTML=catdType;
      console.log(catdType)
      $('#myModal').modal('hide');


             };
    </script>
<div style="text-align:center;">
<h1>
Modal with Js Functions
</h1>
<hr>
</div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-12" 
                            <div class="form-group search-input-area input-icon-category">
                                <div > 
                                 <!------modal start-------->
                   
  <button type="button" class="btn btn-success btn-lg" id="catergories" data-toggle="modal" data-target="#myModal" style="text-align:center;  margin-top:100px;  margin-left:45%;"> Catergories</button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal" >
    <div class="modal-lg modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title"><nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#" onclick="catall();">All Catergories</a></li>
    
   <li class="breadcrumb-item active" aria-current="page" id="breadcrumdisplay"></li>
   
  </ol>
</nav></h3>
          <!-- <button type="button" class="btn btn-danger rounded-circle close"></button> -->
        </div>
        
        <!-- Modal body -->
        <div class="modal-body modal-lg">
        <div class="row" >
        <div class="col-md-12">
        <ul id="subcatergories" style="text-decoration: none;">
   <?php foreach ($catergories as $cat_name => $cat) {
        echo "<li type=\"\"  onclick=\"subcat(this);breadcrumcat(this);\" data-cat-type=\"$cat_name\"><a>" . "<b>" . $cat_name . "</b>" . "</br></a></li>";
    } ?>
    </ul></div>
    
  </div></div>
        
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
                                 <!-------modal end--------->
                                 </div>
                                </div>
                            </div>
                            <!-- jquery-->
                            <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>                   
  </body>
</html>
