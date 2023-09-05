function whatsApp() {
  location.replace("https://wa.me/258848100497");
}

function toggleSelect(checkboxId, selectId) {
  var enableSelectCheckbox = document.getElementById(checkboxId);
  var selectElement = document.getElementById(selectId);

  if (enableSelectCheckbox.checked) {
      selectElement.disabled = false;
  } else {
      selectElement.disabled = true;
  }
}


//Object project

let Projecto = new Array();
var pro = [];

function definirArray( obejctoArray ){

  for (let index = 0; index < obejctoArray.length; index++) {
    let element = obejctoArray[index];
    let imgAntigo = element["pro_img"];

    element["pro_img"] = "./assets/DB/"+imgAntigo;
    
    Projecto.push(element);    
}

}
function listProjecto(){
  for (let index = 0; index < Projecto.length; index++) {
    
    var b = Number(index);
    
    //Dados extraido da DB
    let foto1 = Projecto[b].pro_img;
    let nome1 = Projecto[b].pro_nome;
    let tipo1 = Projecto[b].pro_tipo;

    let tamanho1 = Projecto[b].pro_tamanho;
    let quarto1 = Projecto[b].pro_quarto;
    let wc1 = Projecto[b].pro_wc;
    let garagem1 = Projecto[b].pro_garagem;
    let preco1 = Projecto[b].pro_preco;
    

    pro.push("<div class=\"embla__slide slider-image item\" style=\"margin-left: 1rem; margin-right: 1rem;\">");
      pro.push("<div class=\"slide-content\">");
        
        pro.push("<div class=\"item-img\">");
          
          pro.push("<div class=\"item-wrapper\">");  
            pro.push("<img src=" + foto1+ " alt=\"Projecto DEC\"> width=\"150\" height=\"150\"");
          pro.push("</div>");
        pro.push("</div>");

            pro.push("<div class=\"item-content\">");
              pro.push("<h5  class=\"item-title mbr-fonts-style display-5\"> <strong>"+nome1+"</strong> </h5>");
              pro.push("<hr>");
              pro.push("<span class=\"mbr-text mbr-fonts-style mt-3 display-7\"> <img src=\"assets/images/tape.png\" width=\"50\" height=\"50\">"+" - "+tamanho1+"");
              pro.push("<hr>");
              pro.push("<span class=\"mbr-text mbr-fonts-style mt-3 display-7\"> <img src=\"assets/images/house.png\">"+" - "+tipo1+"");
              pro.push("<hr>");
              pro.push("<span class=\"mbr-text mbr-fonts-style mt-3 display-7\"> <img src=\"assets/images/bed.png\">"+" - "+quarto1+"");
              pro.push("<hr>");
              pro.push("<span class=\"mbr-text mbr-fonts-style mt-3 display-7\"> <img src=\"assets/images/bathroom.png\">"+" - "+wc1+"");
              pro.push("<hr>");
              pro.push("<span class=\"mbr-text mbr-fonts-style mt-3 display-7\"> <img src=\"assets/images/garage.png\">"+" - "+garagem1+"");
              pro.push("<hr>");
              pro.push("<span class=\"mbr-text mbr-fonts-style mt-3 display-7\"> <img src=\"assets/images/payment.png\">"+" - "+preco1+" MZN");
              pro.push("<hr>");
            pro.push("</div>");
                pro.push("<div class=\"mbr-section-btn item-footer mt-2\"> <a href=\"produto.html\" class=\"btn item-btn btn-info display-7\">Interessado </a></div>");
      pro.push("</div>");
    pro.push("</div>");
  }
  document.getElementById("pronto").innerHTML = pro.join("");
}




