  <!-- Info boxes -->
<!--        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dollar-sign"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Bet Today</span>
                <a href="user_daily_statement_dash.php"><span class="info-box-number"><?= printAmount_by_admin_with_symbol($user_act, statement_Player_spend_today($today, $user_act,$conn), $conn)?></span></a>
              </div>
               /.info-box-content 
            </div>
             /.info-box 
          </div>
           /.col 
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-trophy"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Win Amount</span>
                <a href="winner_paid_list.php"><span class="info-box-number"><?=  printAmount_by_admin_with_symbol($user_act, statement_Player_win_dash( $user_act,$conn), $conn)?></span></a>
              </div>
               /.info-box-content 
            </div>
             /.info-box 
          </div>
           /.col 

           fix for small devices only 
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-mobile"></i></span>

              <div class="info-box-content">
                  
                <span class="info-box-text"> Total Games</span>
                <a href="game_list.php"><span class="info-box-number"><?=getGamecount($conn)?></span></a>
              </div>
               /.info-box-content 
            </div>
             /.info-box 
          </div>
           /.col 
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

             <div class="info-box-content">
                <span class="info-box-text">Players Under Me</span>
                  <a href="user_list.php"><span class="info-box-number"><?=countPlayersUnderAdmin($user_act,$conn)?></span>
                  </a>
              </div>
            
               /.info-box-content 
            </div>
             /.info-box 
          </div>
           /.col 
        </div>-->
        <!-- /.row -->
