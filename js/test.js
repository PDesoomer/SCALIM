function bob(id)
{
  var txt="photo_";
  document.getElementById(txt + id).className = "hvr-bob";

  if(id == "webdesign")
  {
    document.getElementById("photo_dev").classList.remove("hvr-bob");
    document.getElementById("photo_graphic").classList.remove("hvr-bob");
  }

  if(id == "dev")
  {
    document.getElementById("photo_webdesign").classList.remove("hvr-bob");
    document.getElementById("photo_graphic").classList.remove("hvr-bob");
  }

  if(id == "graphic")
  {

    document.getElementById("photo_dev").classList.remove("hvr-bob");
    document.getElementById("photo_webdesign").classList.remove("hvr-bob");
  }
}
