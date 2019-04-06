


<body>


<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="<?=base_url();?>assets/img/q.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Bienvenido</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="<?=base_url();?>index.php/login/indexLog" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="email" id="email" placeholder="Email" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<h5>Innovasoft</h5>
			</div>
		</div>
	</div>
</div>  







</body>