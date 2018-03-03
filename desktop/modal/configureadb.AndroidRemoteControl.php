<?php
/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */
if (!isConnect('admin')) {
	throw new Exception('{{401 - Accès non autorisé}}');
}
?>
<div class="container-modal">
	<div class="stepwizard col-md-offset-3">
	    <div class="stepwizard-row setup-panel">
	      <div class="stepwizard-step">
	        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
	        <p>{{Étape 1}}</p>
	      </div>
	      <div class="stepwizard-step">
	        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
	        <p>{{Étape 2}}</p>
	      </div>
	      <div class="stepwizard-step">
	        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
	        <p>{{Étape 3}}</p>
	      </div>
				<div class="stepwizard-step">
	        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
	        <p>{{Étape 4}}</p>
	      </div>
				<div class="stepwizard-step">
	        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
	        <p>{{Étape 5}}</p>
	      </div>
				<div class="stepwizard-step">
	        <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
	        <p>{{Étape 6}}</p>
	      </div>
				<div class="stepwizard-step">
	        <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
	        <p>{{Étape 7}}</p>
	      </div>
	    </div>
	  </div>

	  <form role="form" action="" method="post">
	    <div class="row setup-content" id="step-1">
      	<div class="col-xs-8 col-md-offset-3">
	        <div class="col-md-10">
	          <h3>{{Identifer l'adresse IP de votre périphérique Android via Câble Ethernet ou Wifi}}</h3>
						<div class="form-group">
							<center><label class="control-label">{{Allez dans "Menu", cliquez ou appuyer sur "Status"}}</label></center>
							<center><img src="plugins/AndroidRemoteControl/docs/images/IP_status_setp1.png" width="90%" /></center>
							<br/>
							<input id="ip_address_found" type="text" required="required" class="form-control" placeholder="192.168.1.XXX" />
						</div>
	          <button id="toStep2" class="btn btn-primary nextBtn btn-lg pull-right" type="button" >{{Suivant}}</button>
	        </div>
				</div>
	    </div>
			<div class="row setup-content" id="step-2">
      	<div class="col-xs-6 col-md-offset-3">
	        <div class="col-md-12">
	          <h3>{{Activer le mode Développeur}}</h3>
						<div class="form-group">
							<center><label class="control-label">{{Aller dans le menu "About" - Cliquez ou appuyer plusieurs fois sur "Build"}}</label></center>
							<center><img src="plugins/AndroidRemoteControl/docs/images/About_Build_step2.png" height="360" width="843" /></center>
						</div>
						<button id="toStep3" class="btn btn-primary nextBtn btn-lg pull-right" type="button" >{{Suivant}}</button>
	        </div>
				</div>
	    </div>
			<div class="row setup-content" id="step-3">
      	<div class="col-xs-6 col-md-offset-3">
	        <div class="col-md-12">
	          <h3>{{Activer le mode Debug}}</h3>
						<div class="form-group">
							<center><label class="control-label">{{Aller dans le menu "System - Cliquez ou appuyer sur "Developer options"}}</label></center>
							<center><img src="plugins/AndroidRemoteControl/docs/images/Developer_Options_step3.png" height="360" width="843" /></center>
						</div>
	          <button id="toStep4" class="btn btn-primary nextBtn btn-lg pull-right" type="button" >{{Suivant}}</button>
	        </div>
				</div>
	    </div>
			<div class="row setup-content" id="step-4">
      	<div class="col-xs-6 col-md-offset-3">
	        <div class="col-md-12">
	          <h3>{{Activer le mode Debug}}</h3>
						<div class="form-group">
							<center><label class="control-label">{{Cliquez ou appuyer sur "USB debugging"}}</label></center>
							<center><img src="plugins/AndroidRemoteControl/docs/images/USB_Debugging_step4.png" height="360" width="843" /></center>
						</div>
	          <button id="toStep5" class="btn btn-primary nextBtn btn-lg pull-right" type="button" >{{Suivant}}</button>
	        </div>
				</div>
	    </div>
	    <div class="row setup-content" id="step-5">
      	<div class="col-xs-6 col-md-offset-3">
	        <div class="col-md-12">
	          <h3>{{Créer le service associé à cet appareil Android}}</h3>
						<div class="form-group">
							<label class="control-label">{{Nom du service}}</label>
							<input id="service_name_found" type="text" required="required" class="form-control" />
						</div>
						<button id="toStep6" class="btn btn-primary nextBtn btn-lg pull-right" type="button" >{{Suivant}}</button>
	        </div>
				</div>
	    </div>
			<div class="row setup-content" id="step-6">
      	<div class="col-xs-6 col-md-offset-3">
	        <div class="col-md-12">
	          <h3>{{Appairer l'appareil Android}}</h3>
						<div id='div_connectAndroidRemoteControlAlert' style="display: none;"></div>
						<a class="btn btn-warning pull-right" data-state="1" id="bt_connectAndroidRemoteControlStopStart"><i class="fa fa-pause"></i> {{Pause}}</a>
						<input class="form-control pull-right" id="in_connectAndroidRemoteControlSearch" style="width : 300px;" placeholder="{{Rechercher}}" />
						<br/><br/><br/>
						<pre id='pre_connectAndroidRemoteControl' style='overflow: auto; height: 90%;with:90%;'></pre>
						<div class="progress" id="step6scanProgress">
					    <div id="step6scanProgressBar" class="progress-bar" role="progressbar">
					      <center><span id="step6scanText">{{Appairage en cours}}</span></center>
					    </div>
					  </div>
						<button id="toStep7" class="btn btn-primary nextBtn btn-lg pull-right" type="button" >{{Suivant}}</button>
	        </div>
				</div>
	    </div>
			<div class="row setup-content" id="step-7">
      	<div class="col-xs-6 col-md-offset-3">
	        <div class="col-md-12">
	          <h3>{{Enregistrer la connexion}}</h3>
						<div class="form-group">
							<center><label class="control-label">{{Cliquez ou appuyer sur "Always allow from this computer" puis sur "OK"}}</label></center>
							<center><img src="plugins/AndroidRemoteControl/docs/images/Allow_stepFinal.png" height="360" width="843" /></center>
						</div>
	          <button id="closeConfigureAdb" class="btn btn-primary nextBtn btn-lg pull-right ui-icon-closethick" type="button" >{{Terminer}}</button>
	        </div>
				</div>
	    </div>
	  </form>
	</div>

<script>
	$(document).ready(function () {
	  var navListItems = $('div.setup-panel div a'),
	          allWells = $('.setup-content'),
	          allNextBtn = $('.nextBtn'),
	          allReturnBtn = $('.returnBtn');

	  allWells.hide();

	  navListItems.click(function (e) {
	      e.preventDefault();
	      var $target = $($(this).attr('href')),
	              $item = $(this);

	      if (!$item.hasClass('disabled')) {
	          navListItems.removeClass('btn-primary').addClass('btn-default');
	          $item.addClass('btn-primary');
	          allWells.hide();
	          $target.show();
	          $target.find('input:eq(0)').focus();
	      }
	  });

	  allNextBtn.click(function(){
	      var curStep = $(this).closest(".setup-content"),
	          curStepBtn = curStep.attr("id"),
	          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
	          curInputs = curStep.find("input[type='text'],input[type='url']"),
	          isValid = true;

	      $(".form-group").removeClass("has-error");
	      for(var i=0; i<curInputs.length; i++){
	          if (!curInputs[i].validity.valid){
	              isValid = false;
	              $(curInputs[i]).closest(".form-group").addClass("has-error");
	          }
	      }

	      if (isValid)
	          nextStepWizard.removeAttr('disabled').trigger('click');
	  });

	  allReturnBtn.click(function(){
	      var curStep = $(this).closest(".setup-content"),
	          curStepBtn = curStep.attr("id"),
	          returnStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
	          curInputs = curStep.find("input[type='text'],input[type='url']"),
	          isValid = true;

	      $(".form-group").removeClass("has-error");
	      for(var i=0; i<curInputs.length; i++){
	          if (!curInputs[i].validity.valid){
	              isValid = false;
	              $(curInputs[i]).closest(".form-group").addClass("has-error");
	          }
	      }
	  });
	  $('div.setup-panel div a.btn-primary').trigger('click');
	});
	$("#toStep2").click(function(){
			document.getElementById('ip_address').value = document.getElementById('ip_address_found').value;
			document.getElementById('service_name_found').value = document.getElementById('service_name').value;
	});

		$("#toStep6").click(function(){
				document.getElementById('service_name').value = document.getElementById('service_name_found').value;
				$.ajax({
					type: 'POST',
					url: 'plugins/AndroidRemoteControl/core/ajax/AndroidRemoteControl.ajax.php',
					data: {
						action: 'connectAndroidRemoteControl',
						ip_address: document.getElementById('ip_address_found').value
					},
					dataType: 'json',
					global: false,
					error: function (request, log, error) {
						handleAjaxError(request, log, error, $('#div_connectAndroidRemoteControlAlert'));
					},
					success: function () {
						 jeedom.log.autoupdate({
									 log : 'AndroidRemoteControl_connect',
									 display : $('#pre_connectAndroidRemoteControl'),
									 search : $('#in_connectAndroidRemoteControlSearch'),
									 control : $('#bt_connectAndroidRemoteControlStopStart'),
										});
					}
				});
		});
		$("#toStep7").click(function(){
				$.ajax({
					type: 'POST',
					url: 'plugins/AndroidRemoteControl/core/ajax/AndroidRemoteControl.ajax.php',
					data: {
						action: 'disconnectAndroidRemoteControl',
						ip_address: document.getElementById('ip_address_found').value
					},
					dataType: 'json',
					global: false,
					error: function (request, log, error) {
						handleAjaxError(request, log, error, $('#div_disconnectAndroidRemoteControlAlert'));
					},
					success: function () {
						 jeedom.log.autoupdate({
									 log : 'AndroidRemoteControl_disconnect',
									 display : $('#pre_disconnectAndroidRemoteControl'),
									 search : $('#in_disconnectAndroidRemoteControlSearch'),
									 control : $('#bt_disconnectAndroidRemoteControlStopStart'),
										});
					}
				});
		});

		$("#closeConfigureAdb").click(function(){
				$('#md_modal').dialog( "close" );
		});


</script>
<style type="text/css">
body {
    margin-top:40px;
}
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>
