$(document).ready(function() {
    $("a.topLink").click(function() {
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top + "px"
        }, {
            duration: 2000
        });
        return false;
    });
	$('.rules-link').click(function() {
		$('.rules-link').removeClass('active');
	    $(this).addClass('active');
		$('.rules-item').css('display','none');
		$('#'+$(this).attr('rel')).css('display','block');
	 });
	function reg_check() {
		if ($('#firstname').val()&&
			$('#lastname').val()&&
			$('#year').val()&&
			$('#phone').val()&&
			$('#email').val()&&
			$('#emergencyphone').val()&&
			$('#emergencyname').val()&&
			$('#country').val()&&
			$('#city').val()&&
			$('#distance').val()){
			$('#submit').css('display','block');
			$('#noticebox').css('display','none');
		}else{
			$('#submit').css('display','none');
			$('#noticebox').css('display','block');
		}
	}
	function services_check() {
		if ($('#servicefirstname').val()&&
		$('#servicelastname').val()&&
		$('#serviceemail').val()&&
		$('#servicephone').val()){
			$('#servicesubmit').css('display','block');
			$('#servicenoticebox').css('display','none');
		}else{
			$('#servicesubmit').css('display','none');
			$('#servicenoticebox').css('display','block');
		}
	}
	function regions() {
		if ($('#country').val()!="Россия") {
			$('#regiontext').css('display','none');
			$('#region').css('display','none');
			$('#region').val('');
		}else{
			$('#regiontext').css('display','');
			$('#region').css('display','');
		}
	};
    function getAge(dateString) {
      var year = parseInt(dateString.substring(0,4));
      var month = parseInt(dateString.substring(5,7));
      var day = parseInt(dateString.substring(8,10));

      var today = new Date("2021","10","2");//ставим дату старта(нумерация месяцев начинается с 0)//new Date();
      var birthDate = new Date(year, month - 1, day); // 'month - 1' т.к. нумерация месяцев начинается с 0 
      var age = today.getFullYear() - birthDate.getFullYear();
      var m = today.getMonth() - birthDate.getMonth();
      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) { 
          age--;
      }
      return age;
    }
    function showDistanceByAge(age) {
	    $(".distance-list>li").css('display','none');	
		if (age<=10) {
			$("#funrun").css('display','block');
		}
		if (age>=10&&age<=15) {
			$("#3K").css('display','block');	
		}
		if (age>=15) {
			$("#K14").css('display','block');
		}
		if (age>=18) {
			$("#vottovaara").css('display','block');
			$("#M50").css('display','block');
			$("#K50").css('display','block');
		}
		$("#Test").css('display','block');
	}
	$('#registration input').keyup(function(){	
		reg_check();
		regions();
	});
	$('#services input').keyup(function(){
		services_check();
	});
	$('.distance-list>li>div').click(function(){
		//if ($(this).attr('dist')=="K10") $('.goods').css('display','none');
		//else $('.goods').css('display','block');
		$('.distance-list>li>div').removeClass('active');
		$(this).addClass('active');
		$('#distance').val($(this).attr('dist'));
		$('#price').val($(this).attr('price'));
		if ($(this).attr('product')){
			$('#size').show('fast');
			$('#size>.name').text($(this).attr('product'));
		}else $('#size').hide('fast');
		reg_check();
	});
	$('label[for=goods]').click(function(){
		if ($(this).hasClass('active')){
			$(this).removeClass('active');
			$('#size2').removeClass('active');
		}else{
			$(this).addClass('active');
			$('#size2').addClass('active');
		}
	});
	$('label[for=transfer-required]').click(function(){
		if ($('#transfer-required').prop("checked")){
			$('.transfer-block .radio').hide();
		}else{
			$('.transfer-block .radio').show();
		}
	});
	$('.map-head').click(function(){	
		$('.map-head').removeClass('active');
	    $(this).addClass('active');	
		//if($(this).attr('date-img')==50)  $('.map-img').attr('src','images/map'+$(this).attr('date-img')+'.png');
		$('.map-img').attr('src','images/map/'+$(this).attr('date-img')+'.jpg');
		$('.linkmap').css('display','none');		
		$('#link'+$(this).attr('dist')).css('display','block');		
	});
	$('#datetext').click(function(){	
	    $(this).css('display','none');	
	});
	$('#year').click(function(){	
	    $('#datetext').css('display','none');	
	});
	$('input#firstname').keyup(function(){	
		if ($(this).val()[0]==" ") $(this).val($(this).val().substr(1));
	});
	$('input#lastname').keyup(function(){	
		if ($(this).val()[0]==" ") $(this).val($(this).val().substr(1));
	});
	$('input#servicefirstname').keyup(function(){
		if ($(this).val()[0]==" ") $(this).val($(this).val().substr(1));
	});
	$('input#servicelastname').keyup(function(){
		if ($(this).val()[0]==" ") $(this).val($(this).val().substr(1));
	});
	$('input#city').keyup(function(){	
		if ($(this).val()[0]==" ") $(this).val($(this).val().substr(1));
	});
	$('input#email').blur(function() {
		if($(this).val() != '') {
			var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
			if(pattern.test($(this).val())){
						$(this).css({'border' : '1px solid #cecece'});
						$('#valid').css('display','none');	
						reg_check();		
			} else {
						$(this).css({'border' : '1px solid #ff0000'});
						$('#valid').css('display','block');	
						$('#valid').text('Неверный формат email');
						$('#submit').css('display','none');
						$('#noticebox').css('display','block');
			}
		} else {
			$(this).css({'border' : '1px solid #ff0000'});
			$('#valid').text('Поле email не должно быть пустым');
		}
	});
	$('input#serviceemail').blur(function() {
		if($(this).val() != '') {
			var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
			if(pattern.test($(this).val())){
				$(this).css({'border' : '1px solid #cecece'});
				$('#valid').css('display','none');
				reg_check();
			} else {
				$(this).css({'border' : '1px solid #ff0000'});
				$('#valid').css('display','block');
				$('#valid').text('Неверный формат email');
				$('#submit').css('display','none');
				$('#noticebox').css('display','block');
			}
		} else {
			$(this).css({'border' : '1px solid #ff0000'});
			$('#valid').text('Поле email не должно быть пустым');
		}
	});
	$("input#phone").keyup(function(e){
		this.value = this.value.replace(/[^0-9\.]/g, '');
		if ($(this).val()[0]!="+") $(this).val("+"+$(this).val());
		if($(this).val().length > 11){
						$(this).css({'border' : '1px solid #cecece'});
			} else {
						$(this).css({'border' : '1px solid #ff0000'});
			}
	});
	$("input#servicephone").keyup(function(e){
		this.value = this.value.replace(/[^0-9\.]/g, '');
		if ($(this).val()[0]!="+") $(this).val("+"+$(this).val());
		if($(this).val().length > 11){
			$(this).css({'border' : '1px solid #cecece'});
		} else {
			$(this).css({'border' : '1px solid #ff0000'});
		}
	});
	$("input#emergencyphone").keyup(function(e){
		this.value = this.value.replace(/[^0-9\.]/g, '');
		if ($(this).val()[0]!="+") $(this).val("+"+$(this).val());
		if($(this).val().length > 11){
						$(this).css({'border' : '1px solid #cecece'});
			} else {
						$(this).css({'border' : '1px solid #ff0000'});
			}
	});
	$('#countrytext').click(function(){	
	    $(this).css('display','none');	
	});
	$('#country').click(function(){	
	    $('#countrytext').css('display','none');	
		regions();
	});
	$('#regiontext').click(function(){	
	    $(this).css('display','none');	
	});
	$('#region').click(function(){	
	    $('#regiontext').css('display','none');	
	});
	$('#year').blur(function() {
		if($(this).val() != '') {
			var pattern = /^\d{4}-\d{2}-\d{2}\$/i;
			if(document.getElementById("year").value!= 'undefined'){
						$(this).css({'border' : '1px solid #cecece'});
						$('#valid').css('display','none');	
						reg_check();		
						showDistanceByAge(getAge(document.getElementById("year").value));
			} else {
						$(this).css({'border' : '1px solid #ff0000'});
						$('#valid').css('display','block');	
						$('#valid').text('Неверный формат email');
						$('#submit').css('display','none');
						$('#noticebox').css('display','block');
			}
		} else {
					$(this).css({'border' : '1px solid #ff0000'});
					$('#valid').text('Поле с датой рождения не должно быть пустым');
		}
	});
	function sizeYoutube() {
		var youtube_height=$('.youtube').width()*9/16;
		$('.youtube').height(youtube_height);
	}
	sizeYoutube();
	$( window ).resize(function(){
		sizeYoutube();
	});
});