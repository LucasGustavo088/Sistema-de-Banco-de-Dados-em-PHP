$(document).ready(
  function() {

	//array de motos
    var cont  = 0;
    var moto  = new Array();
    var preco = new Array();
    var ano   = new Array();

    moto [0] = "images/produtos/p1.jpg";
    
	preco[0] = "R$ 2.000,00";

    moto [1] = "images/produtos/p2.jpg";
    preco[1] = "R$ 800,00";

    moto [2] = "images/produtos/p3.jpg";
    preco[2] = "R$ 700,00";

    moto [3] = "images/produtos/p4.jpg";
    preco[3] = "R$ 400,00";
	
	moto [4] = "images/produtos/p5.jpg";
    preco[4] = "R$ 1000,00";
	
	moto [5] = "images/produtos/p6.jpg";
    preco[5] = "R$ 999,99";
	
	moto [6] = "images/produtos/p7.jpg";
    preco[6] = "R$ 5.000,00";
	
	moto [7] = "images/produtos/p8.jpg";
    preco[7] = "R$ 8.000,00";
	
	moto [8] = "images/produtos/p9.jpg";
    preco[8] = "R$ 3.500,00";
	
	moto [9] = "images/produtos/p10.jpg";
    preco[9] = "R$ 20.000,00";
	
	
      
	carregaMoto(0);
      
    //carrega os thumbs
    cols = Math.floor(12/(moto.length));
    for(i = 0; i < moto.length; i++) {
        bloco = "<div class='col-md-" + cols + "'><img src='" + moto[i] + "' class='btThumb img-responsive' data-idx='" + i + "' /></div>";
        $("#thumbs").append(bloco);
    }
    // nomeMoto
    function nomeMoto(imgMoto) {
        var aux = imgMoto.split("/");
        var nomeMoto = aux[1].split(".");
        return nomeMoto[0];
    }
	// carregaMoto
    function carregaMoto(idx) {
		$("#imgGde").hide().attr("src",moto[idx]).fadeIn();
        var nMoto = nomeMoto(moto[idx]);
        var texto =  "Pre&ccedilo: " + preco[idx];
        $("#legenda").html(texto);
    }
	// id flechaDir
    $("#flechaDir").click(
		function() {
			cont = cont + 1;
			if (cont == moto.length) cont = 0;
			carregaMoto(cont);
            $(".boxForm").hide();
		}
	);
	// id flechaEsq
    $("#flechaEsq").click(
		function() {
            cont = cont - 1;
            if (cont == -1) cont = moto.length - 1;
            carregaMoto(cont);
            $(".boxForm").hide();
        }
	);
    // click class brThumb
    $(document).on("click",".btThumb",
		function() {
			cont = $(this).data("idx");
			carregaMoto(cont);
			$(".boxForm").fadeOut("slow");
		}
	);
    // click id carrinho
    $("#carrinho").click(
		function() {
			nMoto = nomeMoto(moto[cont]);
			pMoto = preco[cont];
			aMoto = ano[cont];
			$("#fNomeMoto").html(nMoto); 
			$("#fPrecoMoto").html(pMoto);
			$("#fAnoMoto").html(aMoto);
			$(".boxForm").fadeIn("slow");
		}
	);
  }
);