<?php 
include 'config.php';
//$user = [];
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
//$user = $_SESSION['user'];
$comment = (isset($_SESSION['comment'])) ? $_SESSION['comment'] : [];

?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<title></title>
	<link href="./Css/body.css" type="text/css" rel="stylesheet">
</head>

<body>
	
	<!--về đầu trang-->
	<section class="header">
      <a href="#" class="logo"> <img src="Group logo url (1) 1.png" alt="">  </a>
     
      <div class="timkiem" style="display:inline-block;">
      		<a href=""><i class="fa fa-search" style="color: orangered; font-size:20px; background-color: #FFDAB9; border:5.5px solid #FFDAB9;"></i></a>
      	<input required type="text" name="timkiem" placeholder="Nhập từ khóa tìm kiếm" style="width: 200px; height:30px;  "> 
      </div>

      	       <!-------------PHP--------------------->
       <?php if(isset($user['username'])){?>
      <h3><a href="logout.php" style="color: orangered;">Đăng xuất</a> </h3>

      	<?php }else{ ?>

       	<h3><a href="login.php" style="color: orangered; margin-left:150px;">Đăng nhập</a> / <a href="dangky.php" style="color: orangered; ">Đăng ký</a></h3>     
       	   
      <?php } ?>

            <!----------------------------------------->

     <div class="menu">
     <li><a href=""><i class="fas fa-bars" style="color: orangered;"></i></a>
 			<ul class="navmenu">
         	<li><a href="#" style="color: darkgreen;">Trang chủ</a></li>
            <li><a href="#" style="color: darkgreen;">Món ăn</a></li>
            <li><a href="#" style="color: darkgreen;">Đồ uống</a></li>
            <li><a href="#" style="color: darkgreen;">Hỏi đáp</a></li>
            <li><a href="#" style="color: darkgreen;">Liên hệ</a></li>
        	</ul>     
       </li>
     </div>
 </section>
     <div class="slide">
         <img src="Group header.png" alt="#">

     </div>
	<div class="gototop" id="gototop">
		<a href="javascript:;" onclick="goToTop()"><img class="mui_ten" src="./img/mui-ten.png"></a>
	</div>
	<script>
		window.onscroll = function () {
			var gototop = document.getElementById("gototop");
			if (document.documentElement.scrollTop > 100 || document.body.scrollTop > 100) {
				gototop.style.display = "block";
			} else {
				gototop.style.display = "none";
			}
		}
		function goToTop() {
			var timer = setInterval(function () {
				document.documentElement.scrollTop -= 50;

				if (document.documentElement.scrollTop <= 0)
					clearInterval(timer)
			}, 1)
		}
	</script>

	<div class="left-column">
		<h2><strong> Tóm tắt </strong></h2>
		<div class="tomtat">
			<li><strong>Những quán ăn</strong></li>
			<li><a href="#quanngoquyen">1. Quán Ngô Quyền</a></li>
			<li><a href="#quancomgreen">2. Quán cơm Green</a></li>
			<li><a href="#quanbaoky">3. Quán Bảo ký</a></li>
			<li><a href="#quanhoangdat2">4. Lẩu chay Hoàng Đạt 2</a></li>
			<li><a href="#mycaysasin">5. Mỳ Cay Sasin</a></li>
			<li><a href="#quanpapaxot">6. Quán PaPa Xốt Singapore Food</a></li>
			<li><a href="#bundaubox">7. Bún đậu Box</a></li>
			<li><a href="#launuongbbq">8. Lẩu nướng - BBQ</a></li>
			<li><a href="#bunmiochen">9. Bún - Mì ốc hến</a></li>
			<li><strong>Những quán nước</strong></li>
			<li><a href="#trasuabobapop">10. Trà Sữa BoBaPop</a></li>
			<li><a href="#FeelandTeaExpress">11. Feel Coffee & Tea Express</a></li>
			<li><a href="#misstea">12. Trà sữa Miss Tea</a></li>
			<li><a href="#Sky">13. Trà sữa Sky</a></li>
			<li><a href="#Tuva">14. Tuva Food & Drink</a></li>
			<li><a href="#yescafe">15. Yes cafe </a></li>
		</div>
	</div>


	

	<main>
		<div class="right-column">
			<h1><strong> NHỮNG QUÁN ĂN NGON Ở LÀNG ĐẠI HỌC</strong></h1>

		<div id="quanngoquyen" class="khungxanh">
			<h3><strong>1. Quán Ngô Quyền</strong></h3>
			<div class="img1">
				<img class="img1" src="./img/image-2.png ">
			</div>
			<div class="edit ngoquyen">
				<br>Cơm Ngô Quyền chắn chắn là 1 cái tên rất quen thuộc đối với các bạn sinh viên trong làng, tại chi nhánh gần nhà điều hành này sẽ làm các bạn ngạc nhiên về
				chất lượng món ăn đấy nhé!</br>
				<br>Vì vị trí nằm không gần các trường đại học nên quán cơm phục vụ mục đích chủ yếu là các công nhân, viên
				chức, giáo viên vì vậy chất lượng thức ăn rất là ngon nha!</br>
				<br> Đặc biệt quán cơm Ngô Quyền này chính là đối tác của Làng, các bạn sử dụng thẻ thành viên tại quán sẽ được giảm 10% đơn hàng nha.</br>

			</div>
			<div class="img2">
				<img src="./img/com.png">
			</div>
			<div class="edit">
				<br><i class="fa fa-map-marker"></i> Địa chỉ: Quán này gần nhà điều hành nha các bạn, một quán gần UEL và một quán gần Đại Học Khoa Học Tự Nhiên.
				<br><strong>$</strong> Giá: 25.000 đồng - 30.000 đồng.
				<p><em>Theo <strong>Ngọc Hà</strong></em></p>
			</div>
		</div>
		

		<div id="quancomgreen" class="khungxanh">
			<h3><strong>2. Quán cơm Green</strong></h3>
			<div class="img1">
				<img class="img1" src="./img/quan-comgreen.jpg">
			</div>
			<div class="edit ngoquyen">
				<br>Quán nằm gần ngay Nhà điều hành. Điều làm ấn tượng về quán không chỉ món ăn mà còn nằm ở cả nước
				sốt. Đặc biệt nhất
				chính là nước sốt gà cay cay, quyện thêm vị chua chua, ngọt ngọt, màu nước sốt đậm đà vô cùng kích thích
				vị giác làm
				phải ăn nhiều cơm một tẹo. Ai đã đến quán này một lần thì chắc chắn sẽ quay lại lần thứ 2. </br>
				<br></br>
				<br>Menu của quán gồm có các món:</br>
				<ul>
					<li>Gà xối mỡ</li>
					<li>Gà sốt cay</li>
					<li>Cơm chiên Dương Châu </li>
					<li>Cơm chiên hải sản </li>
					<li>Cơm chiên mực chiên mắm </li>
					<li>Cơm chiên trứng </li>
				</ul>
			</div>
			<div class="img2">
				<img src="./img/com-green.png">
			</div>
			<div class="edit">
				<br><i class="fa fa-map-marker"></i> Địa chỉ: Tổ 6, khu phố 6, p. Linh Trung, Thủ Đức, gần nhà Điều hành.
				<br><strong>$</strong> Giá: 25.000 đồng - 35.000 đồng.
				<p><em>Theo <strong>Thùy Dương</strong></em></p>
			</div>
		</div>

		<div id="quanbaoky" class="khungxanh">
			<h3><strong>3. Quán Bảo Ký</strong></h3>
			<div class="edit">Quán cơm nằm ngay đường Vành đai ký túc xá khu B. Quán được biết đến với một menu có rất
				nhiều món ăn vô cùng phong
				phú và đa dạng. Quán tuy đông khách nhưng phục vụ nhanh chóng nên bạn sẽ không phải chờ lâu khi đến quán
				đâu. Ngoài món
				best seller là cơm gà xối mỡ thì bên cạnh đó món sườn chua ngọt cũng không kém cạnh.
			</div>
			<div class="img1">
				<img class="img1" src="./img/quan-bao-ky.jpg">
			</div>
			<div class="edit baoky">
				<br>Không gian của quán cũng khá rộng rãi và nhiều chỗ. Ngoài ra quán còn có dịch vụ ship đến mọi ngóc
				ngách trong làng
				đại học nên bạn cũng có thể hoàn toàn ngồi tại chỗ và chờ mang đến thôi đó.
			</div>
			<div class="img2">
				<img src="./img/com.png">
			</div>
			<div class="edit">
				<br><i class="fa fa-map-marker"></i> Địa chỉ: Đường Lương Định Của, Đông Hòa Dĩ An Bình Dương.
				<br><strong>$</strong> Giá: 25.000 đồng - 40.000 đồng.
				<p><em>Theo <strong>Ngọc Nhi</strong></em></p>
			</div>
		</div>

		<div id="quanhoangdat2" class="khungxanh">
			<h3><strong>4. Lẩu chay Hoàng Đạt 2</strong></h3>
			<div class="edit">
				<br>Đây là 1 trong những quán lẩu chay đông đảo nhất làng. Nước lẩu đậm đà hương vị từ rau củ. Rau thêm,
				bún thêm, mì gói thêm đều miễn phí.
				<br>Các loại đồ uống đa dạng, giá chỉ từ 5k/ly bao gồm: Sữa đậu nành, sữa chua, chanh dây, nước ngọt các
				loại,…
			</div>
			<div class="img1">
				<img class="img1" src="./img/lauchay-hd2.png">
			</div>
			<div class="edit ngoquyen">
				Quán có 5 chi nhánh. Đặc biệt chi nhánh trên đường Tô Vĩnh Diện là view ngòai trời nên khá thoang, mát
				mẻ, chỗ ngồi cũng
				rất rộng rãi. Còn gì tuyệt vời hơn khi chiều chiều ghé quán, làm một nồi lẩy chay đậm vị, cùng với gió
				chiều thổi vi vu
				mát mẻ nữa.
			</div>
			<div class="img2">
				<img src="./img/quan-hoangdat2.jpg">
			</div>
			<div class="edit">
				<br><i class="fa fa-map-marker"></i> Địa chỉ:
				<br>Chi nhánh 1: đường Lương Định Của, Đông Hòa, Dĩ An, Bình Dương.
				<br>Chi nhánh 2: 84/4, Tô Vĩnh Diện, Đông Hòa, Dĩ An, Bình Dương.
				<br><strong>$</strong> Giá cả: Khoảng 40.000 đồng/người.
				<p><em>Theo <strong>Việt Hưng</strong></em></p>
			</div>
		</div>

		<div id="mycaysasin" class="khungxanh">
			<h3><strong>5. Mỳ cay Sasin</strong></h3>
			<div class="edit">
				Mì cay Sasin TP.HCM ở làng đại học là một trong những địa điểm mì cay yêu thích của sinh viên. Quán có 1
				tầng, nằm ngay
				mặt đường nên rất dễ tìm, bên cạnh đó quán có không gian rộng rãi và thoáng mát. Khu vực chỗ ngồi ăn tại
				quán được bố
				trí rất khoa học, gọn gàng đem lại sự thoải mái cho khách hàng. Nhân viên tại đây cũng rất nhiệt tình,
				chu đáo và nhanh
				nhẹn.
			</div>
			<div class="img1">
				<img class="img1" src="./img/quan-sasin.jpg">
			</div>
			<div class="img2">
				<img src="./img/mycay-sasin.png">
			</div>
			<div class="edit">
				<br>Ngoài một số món chính, menu tại đây có thêm một số món ăn Hàn Quốc nổi tiếng và quen thuộc đối với
				thực khách. Menu
				quán còn có cả nước uống như trà sữa, trà đào,… vô cùng hấp dẫn.
				<br>
				<br>
				<br>
				<br><i class="fa fa-map-marker"></i> Địa chỉ : Đối diện Đại Học Khoa Học Tự Nhiên, Đường A2, Tp. Thủ Đức, TP. HCM
				<br><strong>$</strong> Giá: 20.000 đồng - 60.000 đồng.
				<p><em>Theo <strong>Di Hiền</strong></em></p>
			</div>
		</div>

		<div id="quanpapaxot" class="khungxanh">
			<h3><strong>6. Quán PaPa Xốt Singapore Food</strong></h3>
			<div class="edit">
				Những món cơm, mì xèo xèo, nóng hổi, ngon không cưỡng luôn là những lời khen được thực khách ưu ái nói
				về Quán cơm Xèo
				nổi danh tại làng Đại Học.
			</div>
			<div class="img1">
				<img class="img1" src="./img/quan-papaxot.jpg">
			</div>
			<div class="edit ngoquyen">
				Menu thì phải nói là đa dạng miễn chê luôn. Cơm xèo bò, mì xèo, cơm xèo gà, cá hồi cho đến bò bít tết,
				mì ý,...đủ loại.
				Và đương nhiên đúng tên gọi của quán, khi những phần ăn được bưng đến tay thực khách, thì tiếng “xèo
				xèo" luôn nổi bật.
				Nhờ nó mà những món ăn tại quán thêm phần nào thú vị, tươi ngon. Đi kèm với món cơm thì cũng không thể
				bỏ qua phần nước
				sốt đậm đà , quyện vị và không kém phần hấp dẫn.
			</div>
			<div class="img2">
				<img src="./img/com-papaxot.png">
			</div>
			<div class="edit">
				<br><i class="fa fa-map-marker"></i> Địa chỉ: Quán nằm gần KTX khu B, đường Lương Định Của, Đông Hòa Dĩ An, Bình Dương
				<br><strong>$</strong> Giá: 30.000 đồng - 60.000 đồng.
				<p><em>Theo <strong>Khánh Gia</strong></em></p>
			</div>
		</div>

		<div id="bundaubox" class="khungxanh">
			<h3><strong>7. Bún đậu Box</strong></h3>
			<div class="img1">
				<img class="img1" src="./img/quan-bundaubox.jpg">
			</div>
			<div class="edit ngoquyen">
				Nếu bạn ưng tìm một hàng bún đậu mắm tôm chỉ cần một cái búng tay có đủ đầy các món luôn thì đây chính
				là lựa chọn hoàn
				hảo dành cho bạn nè. Một mẹt ở đây có khá nhiều món: bún nén, thịt heo luộc, đậu hũ chiên giòn ngoài mềm
				trong, chả cốm
				chiên và dưa leo. Chả cốm ở đây là món khoái khẩu của mình, giòn giòn ngon cực nên mỗi lần ăn mình đều
				phải gọi thêm một
				phần. Phần hồn của món này nằm ở mắm tôm đó cả nhà ơi, cho một chút đường, chút tắc đánh bông mắm tôm
				lên và cùng thưởng
				thức thôi.
			</div>
			<div class="img2">
				<img src="./img/bundaubox.png">
			</div>
			<div class="edit">
				<br><i class="fa fa-map-marker"></i> Địa chỉ: Đông hòa, Dĩ an, Bình Dương (đối diện nhà văn hóa sinh viên)
				<br><strong>$</strong> Giá: 25.000 đồng - 35.000 đồng.
				<p><em>Theo <strong>Ngọc Hà</strong></em></p>
			</div>
		</div>

		<div id="launuongbbq" class="khungxanh">
			<h3><strong>8. Lẩu nướng - BBQ</strong></h3>
			<div class="img1">
				<img class="img1" src="./img/quan-launuongbbq.jpg">
			</div>
			<div class="edit ngoquyen">
				Là một quán ăn mới khai trương gần đây nhưng đã thu hút rất nhiều thực khách. Giờ cao điểm khoảng từ 16h
				chiều đến 21h
				tối khách đông đến mức mà các bạn nhân viên chạy không xuể. Nhưng các bạn sẽ không phải đợi lâu đâu vì
				các món ăn luôn
				được chuẩn bị rất nhanh. Điều mình rất thích ở quán là nước lẩu rất đậm đà và còn có rất nhiều rau xanh,
				đối với một
				người nghiện rau như mình thì đây là một điểm cộng. Nếu ngày nào ngán cơm quá thì quán lẩu nướng BBQ sẽ
				là một lựa chọn
				hoàn hảo cho bạn đấy!
			</div>
			<div class="img2">
				<img src="./img/launuongbbq.jpg">
			</div>
			<div class="edit">
				<br><i class="fa fa-map-marker"></i> Địa chỉ: Đông hòa, Dĩ an, Bình Dương (đối diện nhà văn hóa sinh viên)
				<br><strong>$</strong> Giá: 169.000 đồng - 300.000 đồng.
				<p><em>Theo <strong>Ngọc Tân</strong></em></p>
			</div>
		</div>

		<div id="bunmiochen" class="khungxanh">
			<h3><strong>9. Bún - Mì ốc hến</strong></h3>
			<div class="img1">
				<img class="img1" src="./img/quan-bunmiochen.jpg">
			</div>
			<div class="edit ngoquyen">
				Cảm nhận đầu tiên là topping mỗi tô đầy ụ, tương tự nhau, màu sắc bắt mắt hơn người yêu cũ. Gồm có : 1
				chiếc tôm tươi
				bự, quá chừng ốc móng tay ăn không bị cát hay sạn và hến béo bùi bơ, mì gói sợi dai trong tô khá dư giả,
				tỏi phi vàng
				ươm cùng rau răm tạo hương vị đặc biệt, 1 chén mắm me chấm chấm cực kỳ hợp lý.
			</div>
			<div class="img2">
				<img src="./img/bunmiochen.jpg">
			</div>
			<div class="edit">
				<br><i class="fa fa-map-marker"></i> Địa chỉ: 69/6 Tô Vĩnh Diện, Đông Hòa, Dĩ An, Bình Dương
				<br><strong>$</strong> Giá: 22.000 đồng - 25.000 đồng.
				<p><em>Theo <strong>Ngọc Hà</strong></em></p>
			</div>
		</div>

		<div id="trasuabobapop" class="khungxanh">
			<h3><strong>10. Trà Sữa BoBaPop</strong></h3>
			<div class="img1">
				<img class="img1" src="./img/quan-trasuabobapop.png">
			</div>
			<div class="edit ngoquyen">
				Nếu bạn là người “sành” trà sữa thì cái tên Bobabop dường không còn xa lạ. Thương hiệu trà sữa Bobapop “quyến rũ” các
				bạn trẻ bởi phong cách phục vụ khá năng động. Ngoài nhu cầu thưởng thức tại chỗ, Bobabop còn phục vụ giao hàng tận nơi
				cực kỳ nhanh chỉ sau 20 phút là bạn đã cầm trên tay ly trà sữa thơm ngon. Trà sữa BoBaPop với giá cả không quá rẻ và
				cũng không quá đắt đối với sinh viên. Nhưng chất lượng thì luôn ổn định. Không gian yên tĩnh và mát mẻ với thiết kế hiện
				đại, là nơi lý tưởng để chạy deadline phải không nào.
			</div>
			<div class="img2">
				<img src="./img/tra-sua-bobapop.jpg">
			</div>
			<div class="edit">
				<br> <i class="fa fa-map-marker"></i>Địa chỉ:
				<br>Chi nhánh 1: Số 1/10 Ngã ba trường đại học Khoa Học Tự Nhiên
				<br>Chi nhánh 2: Số 8,9 đường 1 ĐH Nông Lâm.
				<br><strong>$</strong> Giá: 2.000 đồng - 55.000 đồng.
				<p><em>Theo <strong>Ngọc Nhi</strong></em></p>
			</div>
		</div>

	<div id="FeelandTeaExpress" class="khungxanh">
			<h3><strong>11. Feel Coffee & Tea Express Làng đại học </strong></h3>
			<div class="img1">
				<img class="img1" src="./img/Feel1.png">
			</div>
			<div class="edit">
			 	<br>Với không gian yên tĩnh, rộng rãi, thoáng mát, hiện đại phù hợp cho nhóm bạn học tập hoặc làm việc. Đây cũng là một lựa chọn dành cho bạn nếu bạn muốn tìm kiếm một quán mở xuyên đêm để có thể chạy kịp deadline nữa đó. Tuy nhiên ghế của quán là ghế gỗ nên không có lớp lót nên không quá thoải mái cho việc ngồi lâu. Một điểm cộng giành cho quán là nhân viên phục vụ rất tận tình và chu đáo.
				<br>Thức uống của Feel được chế biến khá tỉ mỉ nên giá cả luôn giao động ở mức trung bình từ 30-50k. Nếu ai có khẩu vị thiên ngọt và nhẹ nhàng thì  Feel chính  là lựa chọn hàng đầu.
			</div>
			<div class="img2">
				<img src="./img/Feel2.png">
			</div>
			<div class="edit">
				<br>Quán mở cửa từ 7h- 23h
				<br><i class="fa fa-map-marker"></i> Địa chỉ: 
				<br>Feel-A: số 82, Đường Vành Đai Đại học Quốc Gia, Tân Lập, Dĩ An, Bình Dương - 0974 020 790
				<br>Feel-B: Số 10 và 11 ĐH Nông Lâm, Linh Trung, Thủ Đức, HCM
				<br><strong>$</strong> Giá cả: 30.000 đông - 50.000 đồng
				<p><em>Theo <strong>Thùy Dương</strong></em></p>
			</div>
		</div>

			<div id="misstea" class="khungxanh">
			<h3><strong>12.	Trà sữa Miss Tea Làng đại học</strong></h3>
			<div class="img1">
				<img class="img1" src="./img/MT1.png">
			</div>
			<div class="edit">
				Miss Tea nổi tiếng với các thức uống như trà đào cam sả, trà đào, cam đào…Trà sữa Miss Tea rất vừa miệng, giá lại sinh viên. Giá giao động trung bình là 20k, bạn đã có ngay một ly trà sữa truyền thống thơm ngon, các loại thạch của Miss Tea cũng rất phong phú. 
			</div>

			<div class="img2">
				<img src="./img/MT2.png">
			</div>
			<div class="edit">
				<br>Không gian Miss Tea không quá rộng rãi nhưng sạch sẽ. Nhân viên nhanh nhẹn, dễ thương nên rất được các bạn sinh viên yêu thích.
				<br>
				<br><i class="fa fa-map-marker"></i> Địa chỉ: Miss Tea cũng có 2 chi nhánh. Một ở gần trường KHTN, và một cái thì gần KTX khu B
				<br><strong>$</strong> Giá cả: 20.000 - 30.000 
				<p><em>Theo <strong>Thùy Dương</strong></em></p>
			</div>
		</div>

			<div id="Sky" class="khungxanh">
			<h3><strong>13.	Trà sữa Sky Làng đại học</strong></h3>
				<div class="img1">
				<img class="img1" src="./img/Sky.jpg">
			</div>
			<div class="edit">
			Lại một cái tên quen thuộc đối với các tín đồ trà sữa tại Làng đại học Thủ Đức. Chỉ mới xuất hiện chưa đầy 5 năm, Sky đã phát triển và mở rộng thành 3 chi nhánh. Thực đơn của Sky rất phong phú, có thể kể đến như các loại trà sữa, trà đào, yoshake, soda… Giá cả phải chăng, chất lượng tuyệt vời, “ngon, bổ, rẻ” .Không gian quán của Sky rất rộng rãi, thoáng đãng. Tuy nhiên vì đông khách nên quán khá ồn ào, nên Sky chỉ thích hợp cho những bạn đến đây để gặp gỡ, nói chuyện chứ không phải là nơi học bài lý tưởng.
			</div>
	
			<div class="edit">
				<br><i class="fa fa-map-marker"></i> Hiện có ba chi nhánh: 
				<br>+ Trong chợ ĐH Bách Khoa gần ktx Khu A
				<br>+ Gần trường ĐH KH-XH & Nhân Văn tại chợ Tự Nhiên
				<br>+ Gần ktx Khu B
				<br>
				<br><strong>$</strong> Giá: 12.000 - 35.000
				<p><em>Theo <strong>Khánh Gia</strong></em></p>
			</div>
		</div>

	<div id="Tuva" class="khungxanh">
			<h3><strong>14. Tuva Food & Drink</strong></h3>
			<div class="edit">
			Quán rộng rãi, thoáng mát và có một không gian riêng cho các bạn sinh viên có thể học nhóm. 
			</div>
			<div class="img1">
				<img class="img1" src="./img/tuva.png">
			</div>
			<div class="edit">
				<br><i class="fa fa-map-marker"></i> Địa chỉ: Đường Lương Định Của, Đông Hòa, Dĩ An, Bình Dương
				<br><strong>$</strong> Giá cả: 18.000 – 50.000	
				<p><em>Theo <strong>Di Hiền</strong></em></p>
			</div>
		</div>

			<div id="yescafe" class="khungxanh">
			<h3><strong>15. Yes cafe</strong></h3>
				<div class="img1">
				<img class="img1" src="./img/yes1.jpg">
			</div>
			<div class="edit">
			<br>Với không gian siêu rộng cùng nhiều khu vực được thiết kế cho những sở thích khác nhau. Dù bạn muốn tìm một góc tĩnh lặng bên dãy cây xanh, hay một bàn lớn cho buổi họp nhóm, thậm chí là không gian ngoài trời dưới tán cây cổ thụ... Thì Yes đều có cả. Yes được biết đến là một quán mở thâu đêu với không gian 2 tầng rộng rãi, thoải mái, máy lạnh luôn chạy hết công suất chính là nơi lí tưởng để các bạn tránh cái nóng ở Sài thành. 
			<br>Menu phong phú, đa dạng, sẵn sàng chiều lòng thực khách qua đêm cùng dàn nhân viên rất chi nhiệt tình và chu đáo luôn phục vụ 24/7 chính là điểm cộng lớn của Yes. 
			</div>

			<div class="img2">
				<img src="./img/yes2.jpg">
			</div>
			<div class="edit">
				<br><i class="fa fa-map-marker"></i> Địa chỉ: 23-25-27 đường N1, khu phố Tân Lập, Đông Hoà- Dĩ an Bình Dương.
				<br><strong>$</strong> Giá cả: 30.000 – 50.000	
				<p><em>Theo <strong>Việt Hưng</strong></em></p>	
			</div>
	
</div>
	</main>
	
	<footer>
		<div class="footerphoto">
			<img src="Rectangle 421.png" alt="#">
		</div>

		<section id="sectionfooter">
		  <div class="footertitle row">
			<div class="column side">
			  <h4>VỀ CHÚNG TÔI</h4>
			  <p>Reviewmuonnoi là trang web cung cấp cho các bạn những quán ăn ngon và rẻ nhất trong khuôn viên làng đại học.</p>
		
			</div>

			<div class="column middle">
			  <h4>ĐƯỜNG DẪN</h4>
			  <ul>
				<li><a href="#">Trang Chủ</a></li>
				<li><a href="#">Thông Tin Liên Lạc</a></li>
				<li><a href="#">Điều Khoản Dịch Vụ</a></li>
				<li><a href="#">Chính Sách Nội Dung</a></li>
			</ul>
			</div>

			<div class="column side">
			  <h4>THÔNG TIN LIÊN HỆ</h4>
			  <ul>
					<li>
						<p><i class="fa fa-map-marker"></i>
						   Phường Linh Trung<br />
							Thành Phố Thủ Đức, Thành Phố Hồ Chí Minh<br />
							Việt Nam</p>
					</li>
					<li><a href=""><i class="far fa-phone-alt"></i><a href="tel:0123456789"> 0123 456 789</a></span></a></li>
					<li>
						<p><i class="fa fa-envelope"></i>
						<a href="#">reviewmuonnoi@gmail.com</a></p>
				</li>
			</ul>
			</div>

			<div class="ggmap">

          <h4><b></b>ĐƯỜNG ĐẾN LÀNG ĐẠI HỌC<b></b></h4>

          <iframe

            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.343433065643!2d106.80230080187484!3d10.870012150562223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiDEkEhRRyBUUC5IQ00!5e0!3m2!1svi!2s!4v1634649457242!5m2!1svi!2s"

            width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="icon-bar">
    <a href="https://www.facebook.com/" class="facebook" title="Follow on Facebook"><i class="fab fa-facebook"></i></a>

    <a href="https://www.youtube.com/channel/UCZsffo0QcIMCHKI6MMS-dQw/featured" class="youtube"

      title="Follow on Facebook"><i class="fab fa-youtube"></i></i></a>

    <a href="tel:0123456789" class="iconphone" title="Call us"><i class="fas fa-phone"></i></a>

    <a href="https://www.instagram.com/" class="ig" title="Follow on Instagram"><i class="fab fa-instagram"></i></a>
		</div>
      
		  </div>
		</section>
	
	  </footer>
</body>

</html>