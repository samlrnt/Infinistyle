<style>
    .card-img-bottom {
    color: #fff;
    height: 20rem;
    background: url(images/img1.jpg) center no-repeat;
    background-size: cover;
    max-height: 600px;
    height: auto;
    width: auto;
    }
    .col-md-6
    {
        padding : auto;
    }
    .card{
        border : none;
    }

	.content{
		margin-top:5%;
		margin-bottom:5%;
		background:white;
		width:80%;
	}
</style>
<section>
  <div class="container content">
    <div class=" mt-5">
      <div class="row">
          <div class="col-md-6">
            <div class="card-header">
                <div class="card-img-bottom text-dark text-center">
                    <img src="argon/assets/img/pj.jpg" alt="product image here">
                </div>
            </div>
          </div>
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title mt-6 text-center"><?php echo $product->productID;?></h4>
            <p class="card-text text-center"><?php echo $product->productDescription;?></p>
            <p class="card-text text-center"><?php echo $product->productDescription;?></p>
            <center>
                <button class="btn btn-icon btn-3 btn-primary" type="button">
                    <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                    <span class="btn-inner--text">Add To Cart</span>
                </button>
            </center>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
