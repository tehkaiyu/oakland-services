<?php

$oak_rs_arr = [38904751,38904229,38904689,38903578,38904749,38906158,38906192,38905133,38904932,38904283,38904032,38904913,38905048,38904467,38906227,38906829,38903654,38904879,38906744,38906896,38903885,38905465,38906223,38904026,38905103,38905463,38904215,38906333,38904892,38905021,38907080,38904857,38904108,38904814,38903580,38904815,38904212,38904199,38904877,38904844,38904901,38904933,38904675,38903726,38904851,38906995,38904860,38906768,38906767,38904802,38904376,38905093,38904909,38904092,38906556,38903464,38903421,38906731,38906574,38906652,38906653,38904886,38906766,38906205,38905796,38904327,38904418,38906945,38906681,38906895,38905491,38903975,38906630,38906906,38903905,38907054,38904028,38907119,38906914,38907316,38905524,38905525,38905527,38903830,38904873,38904872,38905101,38904948,38906355,38906362,38906363,38906559,38907313,38904947,38906887,38905665,38905682,38907290,38906266,38906270,38904952,38907050,38906618,38904953,38904929,38905791,38904341,38904342,38904147,38904812,38903420,38904871,38907181,38904904,38907159,38906595,38907032,38907293,38905746,38903821,38903501,38907194,38903700,38905556,38906709,38904863,38904931,38907083,38903837,38906665,38906668,38907242,38904193,38905032,38903909,38903691,38904386,38906345,38905786,38904415,38903961,38904653,38904509,38904331,38904279,38904786,38904397,38904268,38903877,38904133,38904731,38906298,38905477,38903661,38906115,38907003,38904955,38904346,38905050,38907283,38904347,38907103,38906300,38904344,38905035,38903915,38905058,38905174,38904811,38905546,38907042,38907078,38904001,38904009,38904497,38905056,38905787,38905788,38905789,38905790,38903804,38907044,38903542,38906603,38906277,38906593,38906596,38906590,38906592,38906599,38906601,38906602,38906598,38904263,38905361,38906530,38903376,38905867,38904123,38906817,38906663,38903434,38905051,38906733,38907057,38905928,38905835,38905455,38904651,38905043,38906730,38904967,38904112,38904878,38906891,38904855,38903924,38904046,38904305,38907209,38903461,38903495,38905557,38905233,38904644,38904524,38904758,38904809,38905856,38905099,38904726,38904257,38906746,38907270,38905023,38905332,38905421,38905234,38907269,38906615,38904062,38905910,38905701,38904442,38905425,38903910,38904311,38906240,38905541,38905534,38905834,38905282,38905167,38904481,38903902,38903860,38906329,38906135,38903989,38904004,38904895,38904297,38903664,38904077,38903935,38906290,38904238,38905034,38905071,38905291,38904274,38904827,38907275,38903543,38906328,38903508,38903859,38905176,38904456,38903810,38905929,38907114,38904075,38906703,38903381,38903886,38903489,38904500,38906732,38904429,38905801,38903699,38904079,38903380,38904658,38904185,38903901,38904853,38905770,38905168,38905909,38905126,38903728,38907152,38907202,38904160,38906876,38905609,38906569,38905354,38905285,38905272,38905883,38904250,38903640,38903773,38905607,38904821,38903769,38903446,38905436,38905123,38905122,38904828,38904641,38906796,38906589,38907153,38904796,38905288,38904038,38906136,38904245,38904005,38905348,38905131,38903365,38905482,38904788,38905424,38905862,38907228,38904272,38907182,38903826,38904324,38903442,38903953,38905362,38906656,38906792,38904017,38903938,38906904,38906286,38906238,38905875,38904239,38904019,38904972,38903828,38905118,38903801,38905841,38904501,38905072,38907241,38905535,38903923,38905074,38907243,38904861,38907245,38903702,38905954,38903856,38903720,38906368,38906948,38905536,38907272,38903643,38904671,38905777,38906654,38905515,38905059,38903817,38905768,38904291,38906729,38907235,38904021,38905450,45133593,38903512,38904531,38905446,38904881,38905626,38904462,38905289,38905774,38905389,38905387,38904988,38907237,38906775,38907108,38906107,38906105,38905741,38906963,38906586,38905750,38907169,38906537,38903653,38905020,38905025,38904882,38906868,38904495,38903529,38903593,38903574,38907092,38907176,38906880,38904673,38905650,38905257,38904919,38906288,38906123,38905953,38906879,38904986,38905538,38905776,38905647,38905653,38905297,38903415,38904721,38905130,38904926,38905743,38905591,38906374,38905619,38904221,38906217,38906676,38906841,38903523,38906382,38905901,38903951,38903824,38905299,38905110,38904423,38906276,38905323,38903610,38904868,38904701,38904169,38905832,38907240];

// ids of all resources that you want to crawl
$file_in = "./data/category_results.20200721035115.json";

$results_arr = json_decode(file_get_contents($file_in), true);
$id_arr = [];
foreach ($results_arr as $result) {
    if (isset($result['id']) && isset($result['category'])) {
        $id_arr[$result['id']][$result['category']] = true;
    }
}

// C
$cat_file_in = "./data/categories.tsv";
$cat_arr = [];
if (($handle = fopen($cat_file_in, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, "\t")) !== FALSE) {
        $cat_id = $data[0];
        $cat_arr[$cat_id]['name'] = $data[1];
        $cat_arr[$cat_id]['parent_id'] = ($data[2] != "TRUE") ? $data[2] : false;
        $cat_arr[$cat_id]['parent_name'] = ($data[2] != "TRUE") ? $cat_arr[$data[2]]['name'] : false;
        $cat_arr[$cat_id]['show'] = ($data[3] == "checked");
        $cat_arr[$cat_id]['count'] = 0;
    }
    fclose($handle);
}

foreach($oak_rs_arr as $id) {
    foreach($id_arr[$id] as $cat_id => $j) {
        $cat_arr[$cat_id]['count']++;
        $cat_arr[$cat_arr[$cat_id]['parent_id']]['count']++;
    }
}

$out = "cat_id,name,parent_name,show,count\n";
foreach($cat_arr as $cat_id => $cat) {
    $out .= $cat_id.",".$cat['name'].",".$cat['parent_name'].",".$cat['show'].",".$cat['count']."\n";
}
file_put_contents("./data/categories_tabulated.".gmdate("YmdHis", time()).".csv", $out);
echo $out;