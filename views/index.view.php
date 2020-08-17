
<div class="signupform">
	<div class="container">
		<!-- main content -->
		<div class="agile_info">
			<div class="w3l_form">
				<div class="left_grid_info">
					<h1>Sistema de control de salones</h1>
					<p>Conexión Soyapango & San Beníto</p>
					<img src="images/isotipo.png" alt="" />
				</div>
			</div>
			<div class="w3_info">
				<h2>Entra a tu cuenta.</h2>
				<p>Ingresa tus datos para acceder.</p>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" name="login">
					<label>Usuario</label>
					<div class="input-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" name="usuario" placeholder="Usuario..." required=""> 
					</div>
					<label>Contraseña</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<input type="Password" name="password" placeholder="Contraseña..." required="">
					</div> 					
						<button class="btn btn-danger btn-block" type="submit">Entrar</button >             
						<?php if(!empty($errores)): ?>
                            <div class="error">
                                <ul>
                                    <?php echo $errores;?>
                                </ul>
                            </div>
                        <?php endif?>
						      
				</form>
			</div>
		</div>
		<!-- //main content -->
	</div>
	<!-- footer -->
	
	<!-- footer -->
</div>
	
