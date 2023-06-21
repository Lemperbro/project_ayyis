<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simple Animated Gradient Border</title>
  
  
  
<style>
@import url('https://fonts.googleapis.com/css?family=Raleway:300,800');

body {
  background: url('https://3.bp.blogspot.com/-YBeTk9NQrR4/WrtiysOeVqI/AAAAAAAAEBs/mvMRVVTMWHM5FY1Y2ex4wSq7m2dD7ZYEQCLcBGAs/s1600/photo-1501449464997-86f52f4f9f66.jpg');
  background-size: cover;
  margin: 0;
  padding: 0;
}

.container {
  width: 100vw;
  height: 100vh;
  background: linear-gradient(150deg, rgba(64,224,208, 0.3), rgba(255,0,128, 0.3));
  font-family: 'Raleway', sans-serif;
}

.center-contents {
  display: flex;
  justify-content: center;
  align-items: center;
}

.card {
  min-width: 400px;
  padding: 25px;
  justify-content: space-around;
  flex-wrap: wrap;
  background: rgba(255,255,255, 0.85);
  border-radius: 15px;
  background-size: cover;
  box-shadow: 3px 5px 5px rgba(0, 0, 0, 0.35);  
  transition: background 0.5s ease;
}

.card:hover {
  background: rgba(255,255,255, 0.95);
}

.profile {
  width: 150px;
  height: 150px; 
  border-radius: 50%;
  background-color: #FF0080;
  background: linear-gradient(150deg, #40E0D0, #FF0080);
  animation: gradientRotate 7s ease infinite;
  transition: border-radius 0.5s ease;
}

.profile:hover {
  border-radius: 45%;
}

.pic {
  width: 95%;
  height: 95%;
  background-image: url('https://2.bp.blogspot.com/-n87xcAqSNvs/WrthSsymHZI/AAAAAAAAEBY/sy_yf-o3gSgRSUPXkyw8LQWl3nk3lsJoACLcBGAs/s1600/01x.jpg');
  background-size: cover;
  border-radius: 50%;
  animation: picFix 7s ease infinite;
  position: relative;
}
.container a {
  text-decoration: none;
}

.info .title {
  color: #C33764;
  font-size: 2.3rem;
  font-weight: 100;
}

.info .title span {
  font-weight: 900;
}

.info .sub-title {
  color: #727272;
  font-size: 1rem;
}

@keyframes gradientRotate {
  0%{transform: rotate(0deg)}
  100%{transform: rotate(360deg)}
}

@keyframes picFix {
  0%{transform: rotate(360deg)}
  100%{transform: rotate(0deg)}
}

@media screen and (max-width: 401px) {
  .card {
    min-width: 200px;
  }
  .card .profile {
    margin-bottom: 10px;
  }
  
  .info {
    display: flex;
    align-items: center;
    flex-direction: column;
  }
}
</style>

  
</head>

<body>

  <div class="container center-contents">
  <a href="https://adimancv.com" target="_blank">
    <div class="card center-contents">
      <div class="profile center-contents">
        <div class="pic"></div>
      </div>
      <div class="info">
        <div class="title"><span>adimancv</span>.com</div>
        <div class="sub-title">
          Assalamualaikum..?? ðŸ‘‹ ðŸ‘‹ 
        </div>
      </div>
    </div>
  </a>
</div>
  
  

</body>

</html>