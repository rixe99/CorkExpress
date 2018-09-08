<link rel="stylesheet" href="./AdminLTE 2 _ Mailbox_files/bootstrap.min.css">
<link rel="stylesheet" href="./AdminLTE 2 _ Mailbox_files/AdminLTE.min.css">
<link rel="stylesheet" href="./AdminLTE 2 _ Mailbox_files/bootstrap.min.css">
<link rel="stylesheet" href="./AdminLTE 2 _ Mailbox_files/AdminLTE.min.css">
<link rel="stylesheet" href="./AdminLTE 2 _ Mailbox_files/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
$(document).ready(function(){
  $("#5000").hide();
  $("#5001").hide();
  $("#5002").hide();
  $("#5003").hide();
  $("#5005").hide();


  $("#5400").click(function(){
      $("#5437").removeClass("active");
      $("#5438").removeClass("active");
      $("#5436").removeClass("active");
      $("#5000").show();
      $("#5001").hide();
      $("#5002").hide();
  });

    $("#5436").click(function(){
        $("#5437").removeClass("active");
        $("#5438").removeClass("active");
        $("#5436").addClass("active");
        $("#5000").hide();
        $("#5001").show();
        $("#5002").hide();
        $tipo = 1;
        $.ajax({
            url:"menu_correio.php",
            method:"POST",
            data: {tipo: $tipo},
            success:function(data){
              $('#putwhere').html(data);
              $( "#pagina" ).remove();
              $( "#pagina" ).remove();
              $( "#pagina" ).remove();
              $( "#pagina" ).remove();
              $('table.paginated').each(function() {
                  var currentPage = 0;
                  var numPerPage = 10;
                  var $table = $(this);
                  $table.bind('repaginate', function() {
                      $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
                  });
                  $table.trigger('repaginate');
                  var numRows = $table.find('tbody tr').length;
                  var numPages = Math.ceil(numRows / numPerPage);
                  var $pager = $('<div class="pager"></div>');
                  for (var page = 0; page < numPages; page++) {
                      $('<button id="pagina" class="btn btn-default btn-sm"></button>').text(page + 1).bind('click', {
                          newPage: page
                      }, function(event) {
                          currentPage = event.data['newPage'];
                          $table.trigger('repaginate');
                          $(this).addClass('active').siblings().removeClass('active');
                      }).appendTo($pager).addClass('clickable');
                  }
                  $pager.insertBefore("#btscryp").find('button.btn btn-default btn-sm:first').addClass('active');
              });
            }
        });
    });
    $("#5437").click(function(){
        $("#5436").removeClass("active");
        $("#5438").removeClass("active");
        $("#5437").addClass("active");
        $("#5000").hide();
        $("#5001").hide();
        $("#5002").show();
    });
    $("#5438").click(function(){
        $("#5436").removeClass("active");
        $("#5437").removeClass("active");
        $("#5438").addClass("active");
        $("#5000").hide();
        $("#5001").hide();
        $("#5002").hide();
    });
    $("#5439").click(function(){
        $("#5440").removeClass("active");
        $("#5441").removeClass("active");
        $("#5439").addClass("active");
        $("#5003").show();
        $tipo = 0;
        $.ajax({
            url:"menu_AllEmails.php",
            method:"POST",
            data: {tipo: $tipo},
            success:function(data){
              $('#live_data').html(data);
            }
        });
    });
    $("#5440").click(function(){
        $("#5439").removeClass("active");
        $("#5441").removeClass("active");
        $("#5440").addClass("active");
        $("#5003").show();
        $tipo = 1;
        $.ajax({
            url:"menu_AllEmails.php",
            method:"POST",
            data: {tipo: $tipo},
            success:function(data){
              $('#live_data').html(data);
            }
        });
    });
    $("#4999").click(function(){
        $ho = "hencanacao@pp.oo";
        $to = $('#compose-to').val();
        $sub = $('#compose-sub').val();
        $save = $('#compose-textarea').html();
          $.ajax({
            url: 'save_email.php',
            type: 'post',
            data: {text: $save, destinatario: $to, assunto: $sub, remetente: $ho},
            datatype: 'html',
            success: function(stre){
            alert(stre);
            if(stre != "Não existe o email do destinatario"){
              window.location.href = "admin.php?an=11";
            }
          }
          });
    });
});
</script>
<section class="content mvct">
<div class="row" >
<div class="col-md-3 mainmenu">
  <div class="mvc">
  <a href="#" id="5400" class="btn btn-primary btn-block margin-bottom">Compor</a>
  <div class="box box-solid ">
    <div class="box-header with-border">
      <h3 class="box-title">Folders</h3>
      <div class="box-tools">
        <button type="button" class="btn btn-box-tool" href="" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="box-body no-padding">
      <ul class="nav nav-pills nav-stacked">
        <li id="5436" class="" style="padding: 4px 10px;"><a href="#"><i class="fa fa-inbox"></i>Caixa de Entrada&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <span class="label label-primary pull-right">12</span></a></li>
        <li id="5437" class="" style="padding: 4px 10px;"><a href="#"><i class="fa fa-send-o"></i>Enviado&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        </a></li>
        <li id="5438" class="" style="padding: 4px 10px;"><a href="#"><i class="fa fa-trash-o"></i> Lixo&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <span class="label label-warning pull-right">65</span>&emsp;&emsp;</a></li>
      </ul>
    </div>
  </div>
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Emails</h3>

      <div class="box-tools">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="box-body no-padding">
      <ul class="nav nav-pills nav-stacked">
        <li id="5439" style="padding: 4px 10px;"><a href="#"><i class="fa fa-users"></i> Users&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        </a></li>
        <li id="5440" style="padding: 4px 10px;"><a href="#"><i class="fa fa-user-secret"></i> Admin&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        </a></li>
      </ul>
    </div>
    <!-- /.box-body -->
  </div>
</div>
</div>
</div>
</section>
<div class="movemain">
    <div class="contentcos1" id="5001">
      <section class="content">
        <div class="row">
          <div class="col-md-9">
            <div class="box box-primary" style="width: 800px; position:relative;top: 10px;left: 10px;">
              <div class="box-header with-border">
                <h3 class="box-title">Inbox</h3>
                <br><br>
              <div class="box-body no-padding">
                <div class="table-responsive mailbox-messages">
                  <table id ="myTable" class="table table-hover table-striped paginated">
                    <tbody id="putwhere">

                    </tbody>
                  </table>
                </div>
                <div id="btscryp"></div>
            </div>
          </div>
        </div>
      </div>
      </section>
      </div>
    </div>
    <!--  -->
    <div class="contentcos2" id="5000">
      <section class="content" >
        <div class="row">
          <!-- /.col -->
          <div class="col-md-9">
            <div class="box box-primary"  style=" width:800px;">
              <div class="box-header with-border">
                <h3 class="box-title">Compose New Message</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <input id="compose-to" class="form-control" placeholder="To:">
                </div>
                <div class="form-group">
                  <input id="compose-sub" class="form-control" placeholder="Subject:">
                </div>
                <ul class="wysihtml5-toolbar">
                  <li>
                    <div class="btn-group">
                      <button class="btn  btn-default"  title="CTRL+B" onclick="document.execCommand( 'bold',false,null);">Bold</button>
                      <button class="btn  btn-default" title="CTRL+I"  onclick="document.execCommand('italic',false,null);">Italic</button>
                      <button class="btn  btn-default" title="CTRL+U"  onclick="document.execCommand( 'underline',false,null);">Underline</button>
                    </div>
                  </li>
                </ul>
                <div class="form-group">
                  <div id="compose-textarea" class="form-control" contentEditable style="height: 300px; overflow-y: scroll;">

                  </div>
                </div>
                <div class="box-footer">
                  <div class="pull-right">
                    <button id="4999" type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="contentcos3" id="5002">
      <section class="content">
        <div class="row">
          <div class="col-md-9">
            <div class="box box-primary" style="width: 800px; position:relative;top: 10px;left: 10px;">
              <div class="box-header with-border">
                <h3 class="box-title">Inbox</h3>
                <br><br>
              <div class="box-body no-padding">
                <div class="table-responsive mailbox-messages">
                  <table id ="myTable" class="table table-hover table-striped paginated2">
                    <tbody>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    <tr>
                      <td class="mailbox-star"><a href=""><i class="fa fa-star text-yellow"></i></a></td>
                      <td class="mailbox-name"><a href="">Alexander Pierce</a></td>
                      <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                      <td class="mailbox-date">11 hours ago</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <div id="btscryp2"></div>
            </div>
          </div>
        </div>
      </div>
      </section>
      </div>
    <script >
    $('table.paginated2').each(function() {
        var currentPage = 0;
        var numPerPage = 10;
        var $table = $(this);
        $table.bind('repaginate', function() {
            $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
        });
        $table.trigger('repaginate');
        var numRows = $table.find('tbody tr').length;
        var numPages = Math.ceil(numRows / numPerPage);
        var $pager = $('<div class="pager"></div>');
        for (var page = 0; page < numPages; page++) {
            $('<button class="btn btn-default btn-sm"></button>').text(page + 1).bind('click', {
                newPage: page
            }, function(event) {
                currentPage = event.data['newPage'];
                $table.trigger('repaginate');
                $(this).addClass('active').siblings().removeClass('active');
            }).appendTo($pager).addClass('clickable');
        }
        $pager.insertBefore("#btscryp2").find('button.btn btn-default btn-sm:first').addClass('active');
    });
    </script>
  </div>
  <div class="contentcos4" id="5005">
    <section class="content" style="width:1000px;">
      <div class="row">
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read Mail</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3>Message Subject Is Placed Here</h3>
                <h5>From: help@example.com
                  <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p>Hello John,</p>

                <p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird
                  on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical
                  master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack
                  gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon
                  asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu
                  blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American
                  Apparel.</p>

                <p>Raw denim McSweeney's bicycle rights, iPhone trust fund quinoa Neutra VHS kale chips vegan PBR&amp;B
                  literally Thundercats +1. Forage tilde four dollar toast, banjo health goth paleo butcher. Four dollar
                  toast Brooklyn pour-over American Apparel sustainable, lumbersexual listicle gluten-free health goth
                  umami hoodie. Synth Echo Park bicycle rights DIY farm-to-table, retro kogi sriracha dreamcatcher PBR&amp;B
                  flannel hashtag irony Wes Anderson. Lumbersexual Williamsburg Helvetica next level. Cold-pressed
                  slow-carb pop-up normcore Thundercats Portland, cardigan literally meditation lumbersexual crucifix.
                  Wayfarers raw denim paleo Bushwick, keytar Helvetica scenester keffiyeh 8-bit irony mumblecore
                  whatever viral Truffaut.</p>

                <p>Post-ironic shabby chic VHS, Marfa keytar flannel lomo try-hard keffiyeh cray. Actually fap fanny
                  pack yr artisan trust fund. High Life dreamcatcher church-key gentrify. Tumblr stumptown four dollar
                  toast vinyl, cold-pressed try-hard blog authentic keffiyeh Helvetica lo-fi tilde Intelligentsia. Lomo
                  locavore salvia bespoke, twee fixie paleo cliche brunch Schlitz blog McSweeney's messenger bag swag
                  slow-carb. Odd Future photo booth pork belly, you probably haven't heard of them actually tofu ennui
                  keffiyeh lo-fi Truffaut health goth. Narwhal sustainable retro disrupt.</p>

                <p>Skateboard artisan letterpress before they sold out High Life messenger bag. Bitters chambray
                  leggings listicle, drinking vinegar chillwave synth. Fanny pack hoodie American Apparel twee. American
                  Apparel PBR listicle, salvia aesthetic occupy sustainable Neutra kogi. Organic synth Tumblr viral
                  plaid, shabby chic single-origin coffee Etsy 3 wolf moon slow-carb Schlitz roof party tousled squid
                  vinyl. Readymade next level literally trust fund. Distillery master cleanse migas, Vice sriracha
                  flannel chambray chia cronut.</p>

                <p>Thanks,<br>Jane</p>
              </div>
            </div>
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Voltar para Tras</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  </div>
  <script>
    function entrar(e) {
      alert(e);
    }
  </script>
    <div id="5003" class="row" style="position:relative;top:-1860px;left: 40px;z-index: 1;">
        <div class="col-lg-9" style="width:100%;">
            <div class="table-responsive table--no-card m-b-30"style="overflow-x: hidden; width:600px">
                  <table class="table table-borderless table-striped table-earning">
                      <thead style="display:block;">
                          <tr>
                              <th style="width:150px">Nome</th>
                              <th style="width:150px">Apelido</th>
                              <th style="width:150px">Email</th>
                              <th style="width:150px">Categoria</th>
                          </tr>
                      </thead >
                      <tbody style="display:block; overflow:scroll; height:160px;" id="live_data">

                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
