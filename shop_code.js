
function updatePrice(element)
{
  currenrRow = element.parentNode.parentNode.rowIndex ;
  price = document.getElementById("table").rows[currenrRow].cells[1].innerHTML;
  quantity = document.getElementById("table").rows[currenrRow].cells[2].firstChild.value;
  total = parseInt(price) * parseInt(quantity) ;
  currentInvoice = parseInt(document.getElementById("total").innerHTML) ;
  newInvoice = currentInvoice + total ;

  $("#total").text(newInvoice) ;
};

function delRow(element)
{
  currenrRow = element.parentNode.parentNode.rowIndex ;
  flower = document.getElementById("table").rows[currenrRow].cells[0].innerHTML;
  window.location.href = "delete_flower.php?flowerName=" + flower;
};
