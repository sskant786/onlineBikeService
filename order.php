<!DOCTYPE html>
<html>
<head>
	
<style>
.container {
  margin-left: 15%;
  margin-right: 15%;
  background-color: #e6e6ff;
  align: center;
  text-align: center;
}
td {
	margin: 10px;
	padding: 15px;
	text-align: center;
	weight: 100%
}
.orderbtn {
    background-color: #000066;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
	font-size:20px;
	text-align: center;
}
.orderbtn :hover {
    opacity: 0.8;
}
</style>
</head>
<body>

<div class="container">
<h2>Order Form</h2>
<p>Please provide required details to get better service</p>
  <form action="/action_page.php">
    <table>
	  <tr>
		<td>
          <label for="fname">Order_id : </label>
		</td>
		<td>
          <input type="text" id="fname" name="order type" placeholder=" order_id..">
		</td>
	  </tr>
	  <tr>
        <td>
		  <label for="lname">customer_id : </label>
        </td>
		<td>
          <input type="text" id="lname" name="" placeholder=" customer_id..">
		</td>
	  </tr>
	  <tr>
	    <td>
	      <label for="order_type">Order type</label>
        </td>
		<td>
          <select id="order_type" name="order_type">
			<option value=""> -- Select order types -- </option>
			<option value="australia">Servicing</option>
			<option value="canada">Repairing</option>
			<option value="usa">Washing</option>
          </select>
		</td>
	   </tr>
	   <tr>
	    <td>
          <label for="discription">Discription</label>
        </td>
		<td>
		  <textarea id="discription" name="discription" placeholder="Write about your order..." style="height:100px"></textarea>
        </td>
	   </tr>
	   <tr>
		 <td colspan="2">
		   <input type="submit" value="Submit Order" name="submit_order" class="orderbtn">
		 </td>
		</tr>
    </table>
  </form>
</div>
</body>
</html>
