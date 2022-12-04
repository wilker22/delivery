               <div class="form-row">
                   <div class="form-group col-md-4">
                       <label for="nome">Nome</label>
                       <input type="text" class="form-control" id="nome" value="<?php echo $usuario->nome ?>">
                   </div>
                   <div class="form-group col-md-2">
                       <label for="cpf">CPF</label>
                       <input type="text" class="form-control" name="cpf id=" cpf" value="<?php echo $usuario->cpf ?>">
                   </div>
                   <div class="form-group col-md-3">
                       <label for="telefone">Telefone</label>
                       <input type="text" name="telefone" class="form-control" name="telefone id=" cpf" value="<?php echo $usuario->telefone ?>">
                   </div>
                   <div class="form-group col-md-3">
                       <label for="email">E-mail</label>
                       <input type="text" name="email" class="form-control" name="e-mail id=" cpf" value="<?php echo $usuario->email ?>">
                   </div>
               </div>


               <div class="form-row">
                   <div class="form-group col-md-3">
                       <label for="exampleInputPassword1">Senha</label>
                       <input type="password" class="form-control" id="password" id="password">
                   </div>

                   <div class="form-group col-md-3">
                       <label for="confirmation_password">Confirmação de Senha</label>
                       <input type="password" class="form-control" id="confirmation_password" name="confirmation_password">
                   </div>
               </div>
               <div class="form-check form-check-flat form-check-primary">
                   <label class="form-check-label">
                       <input type="checkbox" class="form-check-input">
                      Lembre-me
                   </label>
               </div>
               <button type="submit" class="btn btn-primary mr-2 btn-sm">
                <i class="mdi mdi-checkbox-marked-circle btn-icon-prepend"></i>    
                Salvar
                </button>
               <a href="<?php echo site_url("admin/usuarios/show/$usuario->id");?>" class="btn btn-ligth text-dark btn-sm">
                 <i class="mdi mdi-arrow-left btn-icon-prepend"></i> 
                    Voltar
                </a>
                