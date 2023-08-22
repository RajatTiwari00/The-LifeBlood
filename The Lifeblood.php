<?php 
    //include header file
  include ('include/header.php');

  if(isset($_POST['submit'])){
    if(isset($_POST['term']) === true){
      if(isset($_POST['name']) && !empty($_POST['name'])){
        if(preg_match('/^[A-Za-z\s]+$/',$_POST['name'] )){
          $name = $_POST['name'];
        }else{
          $nameError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Only lowercase, uppercase and space characters are allowed  </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
      }else{
        $nameError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please fill the name field </strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }

      if(isset($_POST['gender']) && !empty($_POST['gender'])){
        $gender = $_POST['gender'];
      }else{
        $genderError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Select your gender </strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }

      if(isset($_POST['day']) && !empty($_POST['day'])){
        $day = $_POST['day'];
      }else{
        $dayError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please select date </strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }

      if(isset($_POST['month']) && !empty($_POST['month'])){
        $month = $_POST['month'];
      }else{
        $monthError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please select month </strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }

      if(isset($_POST['year']) && !empty($_POST['year'])){
        $year = $_POST['year'];
      }else{
        $yearError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please select year </strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }

      if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){
        $blood_group = $_POST['blood_group'];
      }else{
        $blood_groupError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please select blood group </strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }

      if(isset($_POST['city']) && !empty($_POST['city'])){
        if(preg_match('/^[A-Za-z\s]+$/',$_POST['city'] )){
          $city = $_POST['city'];
        }else{
          $cityError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Only lowercase, uppercase and space characters are allowed  </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
      }else{
        $cityError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please fill the city field </strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }

      if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){
        if(preg_match('/\d{10}/',$_POST['contact_no'])){
          $contact_no = $_POST['contact_no'];
        }else{
          $contactError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Contact should consist of 10 digits </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
      }else{
        $contactError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please fill the contact field </strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }

      if(isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password']) && !empty($_POST['c_password'])){


      	if(strlen($_POST['password'])>=6){


      		if($_POST['password'] == $_POST['c_password']){

      			$password=$_POST['password'];

      		}else{
      			$passwordError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Passwords are not the same  </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';

      			}


      		}else{
      $passwordError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Password should consist of 6 characters </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';


      }


      	}else{
      $passwordError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please fill the password field</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';


      }
    }else{
      $termError= ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please agree to the terms and conditions</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
  }
?>


<style>
  .size{
    min-height: 0px;
    padding: 60px 0 40px 0;
    
  }
  .form-container{
    background-color: white;
    border: .5px solid #eee;
    border-radius: 5px;
    padding: 20px 10px 20px 30px;
    -webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
    -moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
    box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
  }
  .form-group{
    text-align: left;
  }
  h1{
    color: white;
  }
  h3{
    color: #e74c3c;
    text-align: center;
  }
  .red-bar{
    width: 25%;
  }
</style>

<div class="container-fluid red-background size">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h1 class="text-center">Donate</h1>
      <hr class="white-bar">
    </div>
  </div>
</div>

<div class="container size">
  <div class="row">
    <div class="col-md-6 offset-md-3 form-container">
      <h3>SignUp</h3>
      <hr class="red-bar">
      <?php if(isset($termError)) echo $termError; ?>

      <!-- Error Messages -->
      <form class="form-group" action="" method="post" novalidate="">
        <div class="form-group">
          <label for="fullname">Full Name</label>
          <input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
          <?php if(isset($nameError)) echo $nameError; ?>
        </div><!--full name-->

        <div class="form-group">
          <label for="name">Blood Group</label><br>
          <select class="form-control demo-default" id="blood_group" name="blood_group" required>
            <option value="">---Select Your Blood Group---</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O+</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
          </select>
        </div><!--End form-group-->

        <div class="form-group">
          <label for="gender">Gender</label><br>
          <input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked> Male
          <input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;"> Female
        </div><!--gender-->
        <?php if(isset($genderError)) echo $genderError; ?>

        <div class="form-inline">
          <label for="name">Date of Birth</label><br>
          <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
            <option value="">---Date---</option>
            <  <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option>
              </select>
          </div>

        <div class="form-group">
          <label for="fullname">Email</label>
          <input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control">
        </div>

        <div class="form-group">
          <label for="contact_no">Contact No</label>
          <input type="text" name="contact_no" value="" placeholder="03********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
        </div><!--End form-group-->

        <<div class="form-group">
  <label for="city">City</label>
  <select name="city" id="city" class="form-control demo-default" required>
    <option value="">-- Select --</option>
    <optgroup title="Andaman and Nicobar Islands" label="&raquo; Andaman and Nicobar Islands"></optgroup>
    <option value="Port Blair">Port Blair</option>
    <optgroup title="Andhra Pradesh" label="&raquo; Andhra Pradesh"></optgroup>
    <option value="Visakhapatnam">Visakhapatnam</option>
    <option value="Vijayawada">Vijayawada</option>
    <option value="Guntur">Guntur</option>
    <option value="Nellore">Nellore</option>
    <option value="Kurnool">Kurnool</option>
    <option value="Rajahmundry">Rajahmundry</option>
    <option value="Tirupati">Tirupati</option>
    <option value="Kakinada">Kakinada</option>
    <option value="Kadapa">Kadapa</option>
    <option value="Anantapur">Anantapur</option>
    <option value="Vizianagaram">Vizianagaram</option>
    <option value="Eluru">Eluru</option>
    <option value="Ongole">Ongole</option>
    <option value="Nandyal">Nandyal</option>
    <option value="Machilipatnam">Machilipatnam</option>
    <option value="Adoni">Adoni</option>
    <option value="Tenali">Tenali</option>
    <option value="Proddatur">Proddatur</option>
    <option value="Chittoor">Chittoor</option>
    <optgroup title="Arunachal Pradesh" label="&raquo; Arunachal Pradesh"></optgroup>
    <option value="Itanagar">Itanagar</option>
    <optgroup title="Assam" label="&raquo; Assam"></optgroup>
    <option value="Guwahati">Guwahati</option>
    <option value="Silchar">Silchar</option>
    <option value="Dibrugarh">Dibrugarh</option>
    <option value="Jorhat">Jorhat</option>
    <option value="Nagaon">Nagaon</option>
    <option value="Tinsukia">Tinsukia</option>
    <option value="Tezpur">Tezpur</option>
    <option value="Bongaigaon">Bongaigaon</option>
    <option value="Karimganj">Karimganj</option>
    <option value="Diphu">Diphu</option>
    <optgroup title="Bihar" label="&raquo; Bihar"></optgroup>
    <option value="Patna">Patna</option>
    <option value="Gaya">Gaya</option>
    <option value="Bhagalpur">Bhagalpur</option>
    <option value="Muzaffarpur">Muzaffarpur</option>
    <option value="Darbhanga">Darbhanga</option>
    <option value="Arrah">Arrah</option>
    <option value="Begusarai">Begusarai</option>
    <option value="Chhapra">Chhapra</option>
    <option value="Katihar">Katihar</option>
    <option value="Munger">Munger</option>
    <option value="Purnia">Purnia</option>
    <option value="Saharsa">Saharsa</option>
    <option value="Sasaram">Sasaram</option>
    <option value="Hajipur">Hajipur</option>
    <option value="Dehri">Dehri</option>
    <option value="Siwan">Siwan</option>
    <option value="Motihari">Motihari</option>
    <option value="Nawada">Nawada</option>
    <option value="Bagaha">Bagaha</option>
    <option value="Buxar">Buxar</option>
    <option value="Kishanganj">Kishanganj</option>
    <option value="Sitamarhi">Sitamarhi</option>
    <option value="Jamalpur">Jamalpur</option>
    <option value="Jehanabad">Jehanabad</option>
    <option value="Aurangabad">Aurangabad</option>
    <optgroup title="Chandigarh" label="&raquo; Chandigarh"></optgroup>
    <option value="Chandigarh">Chandigarh</option>
    <optgroup title="Chhattisgarh" label="&raquo; Chhattisgarh"></optgroup>
    <option value="Raipur">Raipur</option>
    <option value="Bhilai">Bhilai</option>
    <option value="Bilaspur">Bilaspur</option>
    <option value="Korba">Korba</option>
    <option value="Durg">Durg</option>
    <option value="Raigarh">Raigarh</option>
    <option value="Rajnandgaon">Rajnandgaon</option>
    <option value="Jagdalpur">Jagdalpur</option>
    <optgroup title="Dadra and Nagar Haveli" label="&raquo; Dadra and Nagar Haveli"></optgroup>
    <option value="Silvassa">Silvassa</option>
    <optgroup title="Daman and Diu" label="&raquo; Daman and Diu"></optgroup>
    <option value="Daman">Daman</option>
    <option value="Diu">Diu</option>
    <optgroup title="Delhi" label="&raquo; Delhi"></optgroup>
    <option value="Delhi">Delhi</option>
    <optgroup title="Goa" label="&raquo; Goa"></optgroup>
    <option value="Panaji">Panaji</option>
    <optgroup title="Gujarat" label="&raquo; Gujarat"></optgroup>
    <option value="Ahmedabad">Ahmedabad</option>
    <option value="Surat">Surat</option>
    <option value="Vadodara">Vadodara</option>
    <option value="Rajkot">Rajkot</option>
    <option value="Bhavnagar">Bhavnagar</option>
    <option value="Jamnagar">Jamnagar</option>
    <option value="Junagadh">Junagadh</option>
    <option value="Gandhinagar">Gandhinagar</option>
    <option value="Gandhidham">Gandhidham</option>
    <option value="Nadiad">Nadiad</option>
    <option value="Morvi">Morvi</option>
    <option value="Surendranagar">Surendranagar</option>
    <option value="Bharuch">Bharuch</option>
    <option value="Anand">Anand</option>
    <option value="Porbandar">Porbandar</option>
    <option value="Godhra">Godhra</option>
    <option value="Navsari">Navsari</option>
    <option value="Mehsana">Mehsana</option>
    <option value="Vapi">Vapi</option>
    <option value="Veraval">Veraval</option>
    <option value="Bhuj">Bhuj</option>
    <option value="Ankleshwar">Ankleshwar</option>
    <option value="Palanpur">Palanpur</option>
    <option value="Patan">Patan</option>
    <optgroup title="Haryana" label="&raquo; Haryana"></optgroup>
    <option value="Faridabad">Faridabad</option>
    <option value="Gurgaon">Gurgaon</option>
    <option value="Panipat">Panipat</option>
    <option value="Ambala">Ambala</option>
    <option value="Yamunanagar">Yamunanagar</option>
    <option value="Rohtak">Rohtak</option>
    <option value="Hisar">Hisar</option>
    <option value="Karnal">Karnal</option>
    <option value="Sonipat">Sonipat</option>
    <option value="Panchkula">Panchkula</option>
    <option value="Bhiwani">Bhiwani</option>
    <option value="Sirsa">Sirsa</option>
    <option value="Bahadurgarh">Bahadurgarh</option>
    <optgroup title="Himachal Pradesh" label="&raquo; Himachal Pradesh"></optgroup>
    <option value="Shimla">Shimla</option>
    <option value="Solapur">Solapur</option>
    <option value="Thane">Thane</option>
    <option value="Navi Mumbai">Navi Mumbai</option>
    <option value="Kalyan-Dombivali">Kalyan-Dombivali</option>
    <option value="Vasai-Virar">Vasai-Virar</option>
    <option value="Pimpri-Chinchwad">Pimpri-Chinchwad</option>
    <option value="Nashik">Nashik</option>
    <option value="Aurangabad">Aurangabad</option>
    <option value="Nagpur">Nagpur</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Pune">Pune</option>
    <optgroup title="Manipur" label="&raquo; Manipur"></optgroup>
    <option value="Imphal">Imphal</option>
    <optgroup title="Meghalaya" label="&raquo; Meghalaya"></optgroup>
    <option value="Shillong">Shillong</option>
    <optgroup title="Mizoram" label="&raquo; Mizoram"></optgroup>
    <option value="Aizawl">Aizawl</option>
    <optgroup title="Nagaland" label="&raquo; Nagaland"></optgroup>
    <option value="Kohima">Kohima</option>
    <optgroup title="Odisha" label="&raquo; Odisha"></optgroup>
    <option value="Bhubaneswar">Bhubaneswar</option>
    <option value="Cuttack">Cuttack</option>
    <option value="Rourkela">Rourkela</option>
    <option value="Brahmapur">Brahmapur</option>
    <option value="Sambalpur">Sambalpur</option>
    <option value="Puri">Puri</option>
    <option value="Balasore">Balasore</option>
    <option value="Bhadrak">Bhadrak</option>
    <option value="Baripada">Baripada</option>
    <option value="Bolangir">Bolangir</option>
    <option value="Jharsuguda">Jharsuguda</option>
    <option value="Paradeep">Paradeep</option>
    <option value="Dhenkanal">Dhenkanal</option>
    <option value="Barbil">Barbil</option>
    <option value="Kendujhar">Kendujhar</option>
    <optgroup title="Puducherry" label="&raquo; Puducherry"></optgroup>
    <option value="Puducherry">Puducherry</option>
    <optgroup title="Punjab" label="&raquo; Punjab"></optgroup>
    <option value="Amritsar">Amritsar</option>
    <option value="Ludhiana">Ludhiana</option>
    <option value="Jalandhar">Jalandhar</option>
    <option value="Patiala">Patiala</option>
    <option value="Bathinda">Bathinda</option>
    <option value="Hoshiarpur">Hoshiarpur</option>
    <option value="Pathankot">Pathankot</option>
    <option value="Mohali">Mohali</option>
    <option value="Moga">Moga</option>
    <option value="Firozpur">Firozpur</option>
    <option value="Phagwara">Phagwara</option>
    <option value="Abohar">Abohar</option>
    <option value="Batala">Batala</option>
    <option value="Malerkotla">Malerkotla</option>
    <option value="Khanna">Khanna</option>
    <option value="Muktasar">Muktasar</option>
    <option value="Barnala">Barnala</option>
    <option value="Rajpura">Rajpura</option>
    <option value="Fazilka">Fazilka</option>
    <option value="Gurdaspur">Gurdaspur</option>
    <option value="Sangrur">Sangrur</option>
    <option value="Nabha">Nabha</option>
    <optgroup title="Rajasthan" label="&raquo; Rajasthan"></optgroup>
    <option value="Jaipur">Jaipur</option>
    <option value="Jodhpur">Jodhpur</option>
    <option value="Kota">Kota</option>
    <option value="Bikaner">Bikaner</option>
    <option value="Ajmer">Ajmer</option>
    <option value="Udaipur">Udaipur</option>
    <option value="Bhilwara">Bhilwara</option>
    <option value="Alwar">Alwar</option>
    <option value="Bharatpur">Bharatpur</option>
    <option value="Sikar">Sikar</option>
    <option value="Pali">Pali</option>
    <option value="Sri Ganganagar">Sri Ganganagar</option>
    <option value="Barmer">Barmer</option>
    <option value="Hanumangarh">Hanumangarh</option>
    <option value="Banswara">Banswara</option>
    <option value="Nagaur">Nagaur</option>
    <option value="Chittorgarh">Chittorgarh</option>
    <option value="Dausa">Dausa</option>
    <option value="Tonk">Tonk</option>
    <option value="Jhunjhunu">Jhunjhunu</option>
    <option value="Sawai Madhopur">Sawai Madhopur</option>
    <option value="Sirohi">Sirohi</option>
    <option value="Bundi">Bundi</option>
    <option value="Churu">Churu</option>
    <option value="Beawar">Beawar</option>
    <option value="Bhagalpur">Bhagalpur</option>
    <option value="Buxar">Buxar</option>
    <option value="Kishanganj">Kishanganj</option>
    <option value="Sitamarhi">Sitamarhi</option>
    <option value="Jamalpur">Jamalpur</option>
    <option value="Jehanabad">Jehanabad</option>
    <option value="Aurangabad">Aurangabad</option>
    <optgroup title="Sikkim" label="&raquo; Sikkim"></optgroup>
    <option value="Gangtok">Gangtok</option>
    <optgroup title="Tamil Nadu" label="&raquo; Tamil Nadu"></optgroup>
    <option value="Chennai">Chennai</option>
    <option value="Coimbatore">Coimbatore</option>
    <option value="Madurai">Madurai</option>
    <option value="Trichy">Trichy</option>
    <option value="Salem">Salem</option>
    <option value="Tiruppur">Tiruppur</option>
    <option value="Erode">Erode</option>
    <option value="Vellore">Vellore</option>
    <option value="Tirunelveli">Tirunelveli</option>
    <option value="Thoothukudi">Thoothukudi</option>
    <option value="Nagercoil">Nagercoil</option>
    <option value="Thanjavur">Thanjavur</option>
    <option value="Dindigul">Dindigul</option>
    <option value="Cuddalore">Cuddalore</option>
    <option value="Kanchipuram">Kanchipuram</option>
    <option value="Tiruvannamalai">Tiruvannamalai</option>
    <option value="Kumbakonam">Kumbakonam</option>
    <option value="Rajapalayam">Rajapalayam</option>
    <option value="Pollachi">Pollachi</option>
    <option value="Neyveli">Neyveli</option>
    <option value="Sivakasi">Sivakasi</option>
    <option value="Pudukkottai">Pudukkottai</option>
    <option value="Vaniyambadi">Vaniyambadi</option>
    <option value="Karaikudi">Karaikudi</option>
    <option value="Nagapattinam">Nagapattinam</option>
    <option value="Kumbakonam">Kumbakonam</option>
    <option value="Ranipet">Ranipet</option>
    <optgroup title="Telangana" label="&raquo; Telangana"></optgroup>
    <option value="Hyderabad">Hyderabad</option>
    <option value="Warangal">Warangal</option>
    <option value="Nizamabad">Nizamabad</option>
    <option value="Khammam">Khammam</option>
    <option value="Karimnagar">Karimnagar</option>
    <option value="Ramagundam">Ramagundam</option>
    <option value="Mahbubnagar">Mahbubnagar</option>
    <option value="Nalgonda">Nalgonda</option>
    <option value="Adilabad">Adilabad</option>
    <option value="Suryapet">Suryapet</option>
    <option value="Miryalaguda">Miryalaguda</option>
    <option value="Wanaparthy">Wanaparthy</option>
    <option value="Kothagudem">Kothagudem</option>
    <option value="Jagtial">Jagtial</option>
    <option value="Bodhan">Bodhan</option>
    <option value="Sangareddy">Sangareddy</option>
    <option value="Siddipet">Siddipet</option>
    <option value="Narayanpet">Narayanpet</option>
    <optgroup title="Tripura" label="&raquo; Tripura"></optgroup>
    <option value="Agartala">Agartala</option>
    <optgroup title="Uttar Pradesh" label="&raquo; Uttar Pradesh"></optgroup>
    <option value="Lucknow">Lucknow</option>
    <option value="Kanpur">Kanpur</option>
    <option value="Ghaziabad">Ghaziabad</option>
    <option value="Agra">Agra</option>
    <option value="Meerut">Meerut</option>
    <option value="Varanasi">Varanasi</option>
    <option value="Allahabad">Allahabad</option>
    <option value="Bareilly">Bareilly</option>
    <option value="Aligarh">Aligarh</option>
    <option value="Moradabad">Moradabad</option>
    <option value="Saharanpur">Saharanpur</option>
    <option value="Gorakhpur">Gorakhpur</option>
    <option value="Noida">Noida</option>
    <option value="Firozabad">Firozabad</option>
    <option value="Jhansi">Jhansi</option>
          </select>
        </div><!--city end-->

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern=".{6,}">
        </div><!--End form-group-->

        <div class="form-group">
          <label for="password">Confirm Password</label>
          <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern=".{6,}">
        </div><!--End form-group-->

        <div class="form-inline">
          <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
          <span style="margin-left:10px;"><b>I agree to donate my blood and show my Name, Contact Nos., and E-Mail in the Blood donors List</b></span>
        </div><!--End form-group-->

        <div class="form-group">
          <button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>
