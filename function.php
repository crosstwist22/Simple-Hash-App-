<?php
	
	if(isset($_GET['q'])){
		switch ($_GET['q']){
			case 'load_setup':{
			echo '<tr>
					<td>md2</td>
					<td id="md2_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>md4</td>
					<td id="md4_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>md5</td>
					<td id="md5_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>sha1</td>
					<td id="sha1_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				   <tr>
					<td>sha224</td>
					<td id="sha224_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>sha256</td>
					<td id="sha256_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>sha384</td>
					<td id="sha384_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>sha512</td>
					<td id="sha512_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>ripemd128</td>
					<td id="ripemd128_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>ripemd160</td>
					<td id="ripemd160_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>ripemd256</td>
					<td id="ripemd256_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>ripemd320</td>
					<td id="ripemd320_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>whirlpool</td>
					<td id="whirlpool_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>tiger128,3</td>
					<td id="tiger128_3_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>tiger160,3</td>
					<td id="tiger160_3_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>tiger192,3</td>
					<td id="tiger192_3_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>tiger128,4</td>
					<td id="tiger128_4_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>tiger160,4</td>
					<td id="tiger160_4_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>tiger192,4</td>
					<td id="tiger192_4_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>snefru</td>
					<td id="snefru_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>snefru256</td>
					<td id="snefru256_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>gost</td>
					<td id="gost_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>gost-crypto</td>
					<td id="gost_crypto_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>adler32</td>
					<td id="adler32_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>crc32</td>
					<td id="crc32_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>crc32b</td>
					<td id="crc32b_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>fnv132</td>
					<td id="fnv132_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>fnv1a32</td>
					<td id="fnv1a32_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>fnv164</td>
					<td id="fnv164_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>fnv1a64</td>
				    <td id="fnv1a64_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>joaat</td>
					<td id="joaat_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval128,3</td>
					<td id="haval128_3_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval160,3</td>
					<td id="haval160_3_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval192,3</td>
					<td id="haval192_3_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval224,3</td>
					<td id="haval224_3_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval256,3</td>
					<td id="haval256_3_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval128,4</td>
					<td id="haval128_4_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval160,4</td>
					<td id="haval160_4_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval192,4</td>
					<td id="haval192_4_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval224,4</td>
					<td id="haval224_4_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval256,4</td>
					<td id="haval256_4_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval128,5</td>
					<td id="haval128_5_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval160,5</td>
					<td id="haval160_5_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval192,5</td>
					<td id="haval192_5_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval224,5</td>
					<td id="haval224_5_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  <tr>
					<td>haval256,5</td>
					<td id="haval256_5_algo_hash"></td>
					<td class="user_toConvert"></td>
				  </tr>
				  ';

				break;
			}
			case 'convert_hash':{
				$hash_array = array(
					'md2' => hash('md2',$_POST['data']),
					'md4' => hash('md4',$_POST['data']),
					'md5' => md5($_POST['data']),
					'sha1' => hash('sha1',$_POST['data']),
					'sha224' => hash('sha224',$_POST['data']),
					'sha256' => hash('sha256',$_POST['data']),
					'sha384' => hash('sha384',$_POST['data']),
					'sha512' => hash('sha512',$_POST['data']),
					'ripemd128' => hash('ripemd128',$_POST['data']),
					'ripemd160' => hash('ripemd160',$_POST['data']),
					'ripemd256' => hash('ripemd256',$_POST['data']),
					'ripemd320' => hash('ripemd320',$_POST['data']),
					'whirlpool' => hash('whirlpool',$_POST['data']),
					'tiger128_3' => hash('tiger128,3',$_POST['data']),
					'tiger160_3' => hash('tiger160,3',$_POST['data']),
					'tiger192_3' => hash('tiger192,3',$_POST['data']),
					'tiger128_4' => hash('tiger128,4',$_POST['data']),	
					'tiger160_4' => hash('tiger160,4',$_POST['data']),	
					'tiger192_4' => hash('tiger192,4',$_POST['data']),
					'snefru' => hash('snefru',$_POST['data']),	
					'snefru256' => hash('snefru256',$_POST['data']),
					'gost' => hash('gost',$_POST['data']),	
					'gost_crypto' => hash('gost-crypto',$_POST['data']),
					'adler32' => hash('adler32',$_POST['data']),
					'crc32' => hash('crc32',$_POST['data']),
					'crc32b' => hash('crc32b',$_POST['data']),	
					'fnv132' => hash('fnv132',$_POST['data']),
					'fnv1a32' => hash('fnv1a32',$_POST['data']),
					'fnv164' => hash('fnv164',$_POST['data']),
					'fnv1a64' => hash('fnv1a64',$_POST['data']),
					'joaat' => hash('joaat',$_POST['data']),
					'haval128_3' => hash('haval128,3',$_POST['data']),
					'haval160_3' => hash('haval160,3',$_POST['data']),
					'haval192_3' => hash('haval192,3',$_POST['data']),
					'haval224_3' => hash('haval224,3',$_POST['data']),
					'haval256_3' => hash('haval256,3',$_POST['data']),
					'haval128_4' => hash('haval128,4',$_POST['data']),
					'haval160_4' => hash('haval160,4',$_POST['data']),
					'haval192_4' => hash('haval192,4',$_POST['data']),
					'haval224_4' => hash('haval224,4',$_POST['data']),
					'haval256_4' => hash('haval256,4',$_POST['data']),
					'haval128_5' => hash('haval128,5',$_POST['data']),
					'haval160_5' => hash('haval160,5',$_POST['data']),
					'haval192_5' => hash('haval192,5',$_POST['data']),
					'haval224_5' => hash('haval224,5',$_POST['data']),
					'haval256_5' => hash('haval256,5',$_POST['data']),



				);

				echo json_encode($hash_array);
				break;
			}
			
		}
	}
	else{
		echo "Shit";
	}
?>