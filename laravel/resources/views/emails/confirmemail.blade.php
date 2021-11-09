@extends('beautymail::templates.sunny')

@section('content')
    <tr class="large_only" bgcolor="#ffffff">
						<td class="w640" height="75" align="center" width="640">
                            							<img border="0" src="<?php echo $message->embed(asset('img/myanusedcarslogo.png'));?>" alt="{{ $senderName or '' }}" width="100" height="75" />

                        </td>
					</tr>
    <tr class="mobile_only" bgcolor="#ffffff">
						<td class="w640" width="640" align="center">
							<img class="mobile_only mobile-logo" border="0" src="<?php echo $message->embed(asset('img/myanusedcarslogo.png'));?>" alt="{{ $senderName or '' }}" width="{{ $logo['width'] }}" height="{{ $logo['height'] }}" />
						</td>
					</tr>




    <tr>
						<td class="w640" bgcolor="#ffffff" width="640">
							<table class="w640" border="0" cellpadding="0" cellspacing="0" width="640">
								<tbody>
    @include('beautymail::templates.sunny.heading',[
    'heading'=>'Confirm your email','level'=>'h2',])
    @include('beautymail::templates.sunny.contentStart')
    <p>
	Hi {{$user->name}} Please! Click button below to confirm your email address
	</p>
    @include('beautymail::templates.sunny.contentEnd')
    <tr>
    <td class="w50" width="50"></td>
    <td class="w560" width="560">
        <table class="w560" border="0" cellpadding="0" cellspacing="0" width="560">
            <tbody>
            <tr class="large_only"><td class="w560" height="15" width="560"></td></tr>
            <tr>
                <td class="w560" width="560">
                    <div class="button-content" align="center">
                        <a href="{{asset($langid.'/user/confirm_sent/'.$user->id.'/'.$user->role)}}" class="button">Click Me</a>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </td>
    <td class="w50" width="50"></td>
</tr>
			</tbody>
							</table>
						</td>
					</tr>
    <tr bgcolor="#ffffff">&nbsp;</tr>

    <tr bgcolor="#ffffff">
						<td>
							<table width="640" class="w640" align="center" cellpadding="0" cellspacing="0">
								<tr bgcolor="#ffffff">
									<td class="w50" width="50"></td>
									<td class="w410" bgcolor="#ffffff" width="410">
										<p>If you cannot click this button go to this link <a href="{{url($langid.'/user/confirm_sent/'.$user->id.'/'.$user->role)}}">{{asset($langid.'/user/confirm_sent/'.$user->id.'/'.$user->role)}}</a></p>

									</td>

								</tr>

							</table>
						</td>
					</tr>
@stop

