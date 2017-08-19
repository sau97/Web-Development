<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}

.columns {
    float: left;
    width: 49.3%;
    padding: 8px;
	
}

.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
    background-color: #111;
    color: white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: #eee;
    font-size: 20px;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

@media only screen and (max-width: 900px) {
    .columns {
        width: 100%;
		display: block;
    }
}

div {
    width: 320px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0;
}

img {
    display: block;
    margin: auto;
}
</style>
</head>
<body>

<h1 style="text-align:center">Redmi Note 3</h1>
<h2 style="text-align:center">Products specification</h2>

<img src="redmi.jpeg" width="600" height="400" >
<br></br>
<div class="columns">
  <ul class="price">
    <li class="header">Specification</li>
    <li class="grey">Model no.</li>
    <li>Screen size</li>
    <li>Camera</li>
    <li>Battery Life</li>
    <li>Storage</li>
    <li>Price</li>
    <li class="grey"><a href="#" class="button">Purchase</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">Details</li>
    <li class="grey">xioami redmi note 3</li>
    <li>5.50 inches</li>
    <li>16MP & 5MP</li>
    <li>4050 mAh</li>
    <li>16 GB</li>
    <li>9999/-</li>
    <li class="grey"><a href="#" class="button">Purchase</a></li>
  </ul>
</div>

</body>
</html>
