

var app = new Vue({
	el: '#app',
	data:{
		grades: [],
		selected: ''
	},
	mounted(){
		axios.get('/admin/student/api/jsonData').then(response => this.grades = response.data);
		$("document").ready(function(){
			$(".mygrade").select2();
			$( ".mygrade" ).change(function() {
				this.selected = $(this).find(':selected').attr('data-id');
				console.log(this.selected);
			});
			$("document").ready(function(){
				$(".myclass").select2();
			});
		});
	}
});