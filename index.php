    &它; ?菲律宾网址
/*
本代码由 便宜技术猫 创建
创建时间 2021-4-23 20:15:20
技术支持 QQ:2420083841 www.azpay.cn
严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/
领导者 ( 'Cache-Control:no-cache,must-revalidate' ) ;
领导者 ( "无缓存" ) ;
领导者 ( "Expires:0" ) ;
领导者 ( "Access-Control-Allow-Origin:*" ) ;
//处理请求输出数据
//这将得到一个文件夹中的所有gif，jpg和png图片的数组
$rand=rand(0,1);
if($rand){
    $localurl="images/*.{gif,jpg,png}";
}else{
    $localurl="images/*.{gif,jpg,png}";
}
$img_array=glob($localurl,GLOB_BRACE);
//从数组中选择一个随机图片
$img=array_rand($img_array);
$imgurl=$img_array[$img];
$https=isset($_GET["https"])?$_GET["https"]:1;


}else{

}

    $rTotal='0';
    $gTotal='0';
    $bTotal='0';
    $total='0';
    $imageInfo = getimagesize($img_array[$img]);
    //图片类型
    $imgType = strtolower(substr(image_type_to_extension($imageInfo[2]), 1));
    //对应函数


    //测试图片，自己定义一个，注意路径
    for($x=0;
    < 成像雷斯 ($i);
$x++){
        for($y0;
$y<imagesy($i);
$y++){
                $rgb = imagecolorat($i,$x,$y);
                $r = ($rgb   > >16) 和;
            $g=($rgb>>8)和;
            $b=$rgb和;
            $rTotal+=$r;
            $gTotal+=$g;
            $bTotal+=$b;
            $total++;
        }
    }
    $rAverage=round($rTotal/$total);
    $gAverage=round($gTotal/$total);
    $bAverage=round($bTotal/$total);
    $arr= 排列 ( 'ImgUrl' =>$imgurl, 'Color' => " $平均值 , 平均值$ , 平均$ " ) ;
     回声  使编码 ( $arr ) ;
     出口 ( ) ;
}
//在页面显示图片地址
//echo $imgurl;
 领导者 ( "location: 一美元 " ) ;
?>
