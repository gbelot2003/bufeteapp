<div class="row">
	<div class="center-align blue" v-if="submitted">
		<p class="white-text valing flow-text">@{{ message }} <i class="material-icons right" v-on="click: submitted = false">close</i></p>
	</div>
</div>