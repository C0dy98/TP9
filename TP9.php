 <? 

 
$name = $_GET["recipeName"];
$list = $_GET["recipeList"];


 if ($name == "Lemon Bars") {
    if ($list == "ingredients") {
        include "ingredients.html";
    }
    elseif ($list == "equipment") {
        include "equipment.html";
    }
    elseif ($list == "directions") {
        include "directions.html";
    }
    else {
        echo "F"
    }
elseif ($name == "Spam Musubi") {
    if ($list == "ingredients") {
        include "ingredients2.html";
    }
    elseif ($list == "equipment") {
        include "equipment2.html";
    }
    elseif ($list == "directions") {
        include "directions2.html";
    }
    else {
        echo "F"
    }
    elseif ($name == "French Crepes") {
        if ($list == "ingredients") {
            include "ingredients3.html";
        }
        elseif ($list == "equipment") {
            include "equipment3.html";
        }
        elseif ($list == "directions") {
            include "directions3.html";
        }
        else {
            echo "F"
        }
}
 } else {

    echo "0";

 }