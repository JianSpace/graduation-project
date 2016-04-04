<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>考试中</title>
	<link rel="stylesheet" type="text/css" href="css/radioquestion.css">
	<link rel="stylesheet" type="text/css" href="../../css/lib/bootstrap.css">
	<script type="text/javascript" src="../../js/lib//jquery-2.1.4.js"></script>
	<script type="text/javascript" src="../../js/myfunction.js"></script>
	<script type="text/javascript" src="js/radioquestion.js"></script>
</head>
<body>
    <header>
		<div class="gradient">
			<span>University of Sanya</span>
		</div>
	</header>
	<div class="container-exam">
		<div class="pointer">
			<div class="progress_self">
				<div class="progress-bar">
					<div class="progress-percent">
						<div class="hint">1/20<span class="triangle"></span></div>
					</div>
				</div>
			</div>
			<div class="counter">00:00:00</div>
		</div>
		<div class="lecture">[选择题]</div>
		<form class="questions">
			<span class="title">这是题目的内容</span>
			<label><input type="radio" name="item" value="A" /> <span></span> </label>
			<label><input type="radio" name="item" value="B" /> <span></span> </label>
			<label><input type="radio" name="item" value="C" /> <span></span> </label>
			<label><input type="radio" name="item" value="D" /> <span></span> </label>
		</form>
		<div class="form-group buttons" id="btn-form">
			<button type="button" class="btn btn-danger submit">提前交卷</button>
			<button type="button" class="btn btn-primary nextitem">下一题</button>
		</div>
		<div class="answersheet">
			<span class="title">收起答题卡<span class="dropup"><span class="caret"></span></span></span>
			<ul class="answersheet-items clearfix">
				<li class="on">1</li>
				<li>2</li>
				<li>3</li>
				<li>4</li>
				<li>5</li>
				<li>6</li>
				<li>7</li>
				<li>8</li>
				<li>9</li>
				<li>10</li>
				<li>11</li>
				<li>12</li>
				<li>13</li>
				<li>14</li>
				<li>15</li>
				<li>16</li>
				<li>17</li>
				<li>18</li>
				<li>19</li>
				<li>20</li>
			</ul>
		</div>
	</div>
</body>
</html>