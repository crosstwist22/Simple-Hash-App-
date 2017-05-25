$(document).ready(function(){
	
	Materialize.updateTextFields();
	 $('#user_input_hash').trigger('autoresize');
	function __setupAlgos(){
		this.output = function(){
			$.ajax({
				url:'function.php?q=load_setup',
				method:"POST",
				success:function(data){
					$('#hash-answer').html(data);
				}
			})
		}
		
	}
	var c = new __setupAlgos();
	c.output();
	

	$(document).on('input','#user_input_hash',function(){
		if($(this).val() === ""){
			$('.user_toConvert').text(' ');
		}
		$('.user_toConvert').text($(this).val());

		var _hashOutput = new __outputHash();
		_hashOutput.convertHash($('#user_input_hash').val());
	})

	function __outputHash(){
		this.convertHash = function(input){
			$.ajax({
				url:'function.php?q=convert_hash',
				method:"POST",
				dataType:'json',
				data:{
					data:input
				},
				success:function(data){
					if($('#user_input_hash').val() === ""){
						$('#md2_algo_hash').text("");
						$('#md4_algo_hash').text("");
						$('#md5_algo_hash').text("");
						$('#sha1_algo_hash').text("");
						$('#sha224_algo_hash').text("");
						$('#sha256_algo_hash').text("");
						$('#sha384_algo_hash').text("");
						$('#sha512_algo_hash').text("");
						$('#ripemd128_algo_hash').text("");
						$('#ripemd160_algo_hash').text("");
						$('#ripemd256_algo_hash').text("");
						$('#ripemd320_algo_hash').text("");
						$('#whirlpool_algo_hash').text("");
						$('#tiger128_3_algo_hash').text("");
						$('#tiger160_3_algo_hash').text("");
						$('#tiger192_3_algo_hash').text("");
						$('#tiger128_4_algo_hash').text("");
						$('#tiger160_4_algo_hash').text("");
						$('#tiger192_4_algo_hash').text("");
						$('#snefru_algo_hash').text("");
						$('#snefru256_algo_hash').text("");
						$('#gost_algo_hash').text("");
						$('#gost_crypto_algo_hash').text("");
						$('#adler32_algo_hash').text("");
						$('#crc32_algo_hash').text("");
						$('#crc32b_algo_hash').text("");
						$('#fnv132_algo_hash').text("");
						$('#fnv1a32_algo_hash').text("");
						$('#fnv164_algo_hash').text("");
						$('#fnv1a64_algo_hash').text("");
						$('#joaat_algo_hash').text("");
						$('#haval128_3_algo_hash').text("");
						$('#haval160_3_algo_hash').text("");
						$('#haval192_3_algo_hash').text("");
						$('#haval224_3_algo_hash').text("");
						$('#haval256_3_algo_hash').text("");
						$('#haval128_4_algo_hash').text("");
						$('#haval160_4_algo_hash').text("");
						$('#haval192_4_algo_hash').text("");
						$('#haval224_4_algo_hash').text("");
						$('#haval256_4_algo_hash').text("");
						$('#haval128_5_algo_hash').text("");
						$('#haval160_5_algo_hash').text("");
						$('#haval192_5_algo_hash').text("");
						$('#haval224_5_algo_hash').text("");
						$('#haval256_5_algo_hash').text("");
					}
					else{
					$('#md2_algo_hash').text(data.md2);
					$('#md4_algo_hash').text(data.md4);
					$('#md5_algo_hash').text(data.md5);
					$('#sha1_algo_hash').text(data.sha1);
					$('#sha224_algo_hash').text(data.sha224);
					$('#sha256_algo_hash').text(data.sha256);
					$('#sha384_algo_hash').text(data.sha384);
					$('#sha512_algo_hash').text(data.sha512);
					$('#ripemd128_algo_hash').text(data.ripemd128);
					$('#ripemd160_algo_hash').text(data.ripemd160);
					$('#ripemd256_algo_hash').text(data.ripemd256);
					$('#ripemd320_algo_hash').text(data.ripemd320);
					$('#whirlpool_algo_hash').text(data.whirlpool);
					$('#tiger128_3_algo_hash').text(data.tiger128_3);
					$('#tiger160_3_algo_hash').text(data.tiger160_3);
					$('#tiger192_3_algo_hash').text(data.tiger192_3);
					$('#tiger128_4_algo_hash').text(data.tiger128_4);
					$('#tiger160_4_algo_hash').text(data.tiger160_4);
					$('#tiger192_4_algo_hash').text(data.tiger160_4);
					$('#snefru_algo_hash').text(data.snefru);
					$('#snefru256_algo_hash').text(data.snefru256);
					$('#gost_algo_hash').text(data.gost);
					$('#gost_crypto_algo_hash').text(data.gost_crypto);
					$('#adler32_algo_hash').text(data.adler32);
					$('#crc32_algo_hash').text(data.crc32);
					$('#crc32b_algo_hash').text(data.crc32b);
					$('#fnv132_algo_hash').text(data.fnv132);
					$('#fnv1a32_algo_hash').text(data.fnv1a32);
					$('#fnv164_algo_hash').text(data.fnv164);
					$('#fnv1a64_algo_hash').text(data.fnv1a64);
					$('#joaat_algo_hash').text(data.joaat);
					$('#haval128_3_algo_hash').text(data.haval128_3);
					$('#haval160_3_algo_hash').text(data.haval160_3);
					$('#haval192_3_algo_hash').text(data.haval192_3);
					$('#haval224_3_algo_hash').text(data.haval224_3);
					$('#haval256_3_algo_hash').text(data.haval256_3);
					$('#haval128_4_algo_hash').text(data.haval128_4);
					$('#haval160_4_algo_hash').text(data.haval160_4);
					$('#haval192_4_algo_hash').text(data.haval192_4);
					$('#haval224_4_algo_hash').text(data.haval224_4);
					$('#haval256_4_algo_hash').text(data.haval256_4);
					$('#haval128_5_algo_hash').text(data.haval128_5);
					$('#haval160_5_algo_hash').text(data.haval160_5);
					$('#haval192_5_algo_hash').text(data.haval192_5);
					$('#haval224_5_algo_hash').text(data.haval224_5);
					$('#haval256_5_algo_hash').text(data.haval256_5);
					}
				}
			})
		}
	}

	
});

