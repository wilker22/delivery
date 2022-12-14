               <div class="form-row">
                   <div class="form-group col-md-4">
                       <label for="nome">Nome</label>
                       <input type="text" class="form-control" id="nome" value="<?php echo esc($usuario->nome); ?>">
                   </div>
                   <div class="form-group col-md-2">
                       <label for="cpf">CPF</label>
                       <input type="text" class="form-control" name="cpf id=" cpf" value="<?php echo esc($usuario->cpf); ?>">
                   </div>
                   <div class="form-group col-md-3">
                       <label for="telefone">Telefone</label>
                       <input type="text" name="telefone" class="form-control" name="telefone id=" cpf" value="<?php echo esc($usuario->telefone) ?>">
                   </div>
                   <div class="form-group col-md-3">
                       <label for="email">E-mail</label>
                       <input type="text" name="email" class="form-control" name="e-mail id=" cpf" value="<?php echo esc($usuario->email) ?>">
                   </div>
               </div>


               <div class="form-row">
                   <div class="form-group col-md-3">
                       <label for="exampleInputPassword1">Senha</label>
                       <input type="password" class="form-control" id="password" id="password">
                   </div>

                   <div class="form-group col-md-3">
                       <label for="password_confirmation">Confirmação de Senha</label>
                       <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                   </div>
                   <div class="form-group col-md-3">
                       <label for="status">Perfil de Acesso</label>
                       <select name="is_admin"  id="is_admin" class="form-control">
                        <?php if($usuario->id) : ?>
                            <option value="1" <?php echo ($usuario->is_admin) ? 'selected' : ''?>>Administrador</option>
                            <option value="0" <?php echo (!$usuario->is_admin) ? 'selected' : ''?>>Cliente</option>
                            
                        <?php else: ?>
                            <option value="1">Sim</option>
                            <option value="0" selected>Não</option>
                        <?php endif ?>
                       </select>
                       
                   </div>

                   <div class="form-group col-md-3">
                       <label for="status">Ativo</label>
                       <select name=""  id="" class="form-control">
                        <?php if($usuario->id) : ?>
                            <option value="1" <?php echo ($usuario->ativo) ? 'selected' : ''?>>Sim</option>
                            <option value="0" <?php echo (!$usuario->ativo) ? 'selected' : ''?>>Não</option>
                            
                        <?php else: ?>
                            <option value="1">Sim</option>
                            <option value="0" selected>Não</option>
                        <?php endif ?>
                       </select>
                       
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
                