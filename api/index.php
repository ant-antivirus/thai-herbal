<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, content-type, access-control-allow-origin, access-control-allow-methods, access-control-allow-headers");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");  
header("Content-Type: application/json; charset=UTF-8");
// header("Content-Type: application/x-www-form-urlencoded; charset=UTF-8");
header("Accept: application/json");
header("X-UTC: ".time());

define("SITE_URL", "http://www.cloud9worldwide.com/clients/thai-herbal/");

function pushData($name, $company, $photo = null, $price = 0, $link = null) {
	$data = array(
		"name" => $name,	
		"company" => $company,	
		"photo" => $photo,	
		"price" => (!empty($price))?number_format($price, 0)." THB":"Ask for Price",
		"link" => (!empty($link))?$price:"#",
		"link" => $link,	
	);
	return $data;
}

function array_sort($array, $on, $order=SORT_ASC) {
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
                break;
            case SORT_DESC:
                arsort($sortable_array);
                break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

$data[] = pushData("Lemongrass", "Exotic Food Co.,Ltd.", SITE_URL."mobile/assets/img/products-item-01.jpg", 0, "https://www.thaitrade.com/store/exotic_food_public_company_limited/product-detail/chopped-lemongrass-in-brine--15--off-until-15-june-2017--3056057");
$data[] = pushData("Asiatic", "Bangkok Chili Ltd., Part.", SITE_URL."mobile/assets/img/products-item-02.jpg", 0, "https://www.thaitrade.com/store/bangkok_chili_ltd___part_/product-detail/dried-tom-yum-herbs-101054");
$data[] = pushData("Tom Yum Crisp with Peanut & Fish", "Thai Tanya Interfood Co.,Ltd.", SITE_URL."mobile/assets/img/products-item-03.jpg", 0, null);
$data[] = pushData("Natural white kraft box gift box of Thai herbal blend", "Bonback Business Company", SITE_URL."mobile/assets/img/products-item-04.jpg", 0, null);
$data[] = pushData("Thai herbal blended tea in pyramid tea bags", "Exotic Food Co.,Ltd.", SITE_URL."mobile/assets/img/products-item-05.jpg", 0, null);
$data[] = pushData("Tom Yum Crisp with Cashew Nuts", "Exotic Food Co.,Ltd.", SITE_URL."mobile/assets/img/products-item-06.jpg", 0, null);
$data[] = pushData("Ready To Cook ", "Exotic Food Co.,Ltd.", SITE_URL."mobile/assets/img/products-item-07.jpg", 0, null);
$data[] = pushData("Green Curry Paste", "Bangkok Chili Ltd., Part.", SITE_URL."mobile/assets/img/products-item-08.jpg", 0, null);
$data[] = pushData("White Pepper Powder", "XXXXXXXXXXXX", SITE_URL."mobile/assets/img/products-item-09.jpg", 0, null);
$data[] = pushData("Coriander Ginger Dressing", "Exotic Food Co.,Ltd.", SITE_URL."mobile/assets/img/products-item-10.jpg", 0, null);

// shuffle($data);

$postdata = file_get_contents("php://input");

if (isset($postdata)) {
	$request = json_decode($postdata, true);
	if ($request["sortdata"] == "name") {
		$data = array_values(array_sort($data, "name"));
	}
}

$result = array(
	"success" => "true",
	"data" => $data,
);

echo json_encode($result);
?>
