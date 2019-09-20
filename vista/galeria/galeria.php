<?php 
include("conexion.php");
$active1="";
$active2="active";
$active3="";
$active4="";
?>
<?php include('cabeza.php');?>
<body>
<?php include('nav.php');?>
<div class="container gallery-container">
    
    <h1 class="text-center">Ropa de mujeres</h1>
    </br>
    
    <div class="tz-gallery">

        <div class="row">
        <?php
            $nums=1;
            $sql_banner_top=mysqli_query($con,"select * from banner where estado=1 order by orden ");
            while($rw_banner_top=mysqli_fetch_array($sql_banner_top)){
        ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/banner/<?php echo $rw_banner_top['url_image'];?>">
                        <img src="img/banner/<?php echo $rw_banner_top['url_image'];?>" alt="<?php echo $rw_banner_top['titulo'];?>">
                    </a>
                    <div class="caption">
                        <h3 class="text-center"><?php echo $rw_banner_top['titulo'];?></h3>

                    </div>
                </div>
            </div>
        <?php
            if ($nums%3==0){
                echo '<div class="clearfix"></div>';
            }
            $nums++;
            }
        ?>  
            
            
           
        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

    <div class="container gallery-container">
    
    <h1 class="text-center">Ropa de hombres</h1>
    </br>
    
    <div class="tz-gallery">

        <div class="row">
        <?php
            $nums=1;
            $sql_banner_top=mysqli_query($con,"select * from banner where estado=1 order by orden ");
            while($rw_banner_top=mysqli_fetch_array($sql_banner_top)){
        ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/banner/<?php echo $rw_banner_top['url_image'];?>">
                        <img src="img/banner/<?php echo $rw_banner_top['url_image'];?>" alt="<?php echo $rw_banner_top['titulo'];?>">
                    </a>
                    <div class="caption">
                        <h3 class="text-center"><?php echo $rw_banner_top['titulo'];?></h3>

                    </div>
                </div>
            </div>
        <?php
            if ($nums%3==0){
                echo '<div class="clearfix"></div>';
            }
            $nums++;
            }
        ?>  
            
            
           
        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>