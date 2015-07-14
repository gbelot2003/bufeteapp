<div class="row" v-if="totalPage > 1">
	<ul class="pagination">

		<li v-class="disabled: currentPage == 0 ">
			<a href="#tops" v-on="click: setPage(0)">
				<i class="material-icons">chevron_left</i>
			</a>
		</li>

		<li
			v-repeat="
				pageNumber: totalPage
				"
			v-class="
				active: currentPage == pageNumber,
				waves-effect: currentPage ! = pageNumber,
				blue: currentPage == pageNumber"
		>

			<a class="anchor" href="#tops"  v-on="click: setPage(pageNumber)">@{{ pageNumber + 1 }}</a>
		</li>

		<li v-class="disabled: currentPage === totalPage-1">
			<a href="#!" v-on="click: setPage(totalPage - 1)">
				<i href="#tops" class="material-icons">chevron_right</i>
			</a>
		</li>

	</ul>
</div>