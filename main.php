
<?php
//  include("./page/cafe_vs_thuc_uong.php");	

if(isset($_GET['quanly'])){
$tam = $_GET['quanly'];
}else{
     $tam = '';
}
if($tam=='gioithieu'){
     include("./page/gioithieu.php");
}elseif($tam=='lienhe'){
     include("./page/lienhe.php");
}elseif($tam=='nhuongquyen'){
     include("./page/nhuong_quuyen.php");
}elseif($tam=='thucdon'){
    include("./page/thuc_don.php");
}elseif($tam=='thuehoinghi'){
    include("./page/thue_hoi_nghi.php");
}elseif($tam=='cafe_vs_thuc_uong'){
    include("./page/cafe_vs_thuc_uong.php");
}elseif($tam=='a-la-carte'){
    include("./page/a-la-carte.php");
}elseif($tam=='diem-tam-sang'){
    include("./page/diem-tam-sang.php");	    
}elseif($tam=='com-trua-van-phong'){
    include("./page/com-trua-van-phong.php");    
}elseif($tam=='thuc-don-tiec'){
    include("./page/thuc-don-tiec.php");  
}elseif($tam=='dang_ky'){
    include("./page/dang_ky.php");     
}elseif($tam=='nhuong_quyen'){
    include("./page/nhuong_quyen.php");     
}elseif($tam=='Cua_hang'){
    include("./page/Cua_hang.php");     
}elseif($tam=='cach-pha-che-mot-ly-ca-phe-den-dam-da'){
    include("./page/cach-pha-che-mot-ly-ca-phe-den-dam-da.php");  
}elseif($tam=='13-su-that-it-nguoi-biet-ve-ca-phe'){
    include("./page/13-su-that.php");  
}elseif($tam=='12-noi-nen-den-trong-buoi-hen-dau-tien'){
    include("./page/12-noi-nen.php");               

}elseif($tam=='vtv_quay_va_ghi_hinh'){
    include("./page/quay_va_ghi_hinh.php");               
}elseif($tam=='lazada-to-chuc-su-kien'){
    include("./page/LAZADA.php");               
}elseif($tam=='work-shop-digital-transformation'){
    include("./page/work-shop.php");               
}elseif($tam=='dien-quan-tot-chuc-hoi-thao-hanh-trinh-trieu-view'){
    include("./page/dien-quan.php");               
}elseif($tam=='event-ninh-duong-lan-ngoc-son-moi-yumeisakura'){
    include("./page/event.php");               
}elseif($tam=='hoi-thao-sach-nha-lanh-dao-kim-cuong-michelle-nguyen'){
    include("./page/hoi-thao.php");               

}elseif($tam=='tai_sao_chon_the_dducky'){
    include("./page/tai_sao.php"); 
}elseif($tam=='chi_phi_nhuong_quyen'){
    include("./page/chi_phi.php"); 
}elseif($tam=='quy_trinh_tham_gia'){
    include("./page/quy_trinh.php"); 
}elseif($tam=='xom_9_ky_tay_ky_anh'){
    include("./page/xom_9.php"); 
}elseif($tam=='471-03_nui_thanh_hai_chau_DN'){
    include("./page/471.php"); 
}elseif($tam=='Central_Plaza'){
    include("./page/central.php"); 



}else{
    include("./page/index.php");
}
?>



