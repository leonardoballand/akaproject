var specBtn = $('#newSpec')
var closeBtn = $('#closeSpec')
var formContainer = $('#newspecContent')

specBtn.click(function(e){
   e.preventDefault()
   formContainer.fadeIn()
})

closeBtn.click(function(e){
   e.preventDefault()
   var close = confirm("Are you sure to cancel?")
   
   if (close == true) {
      formContainer.fadeOut()
      addBtn.hide()
      inputsContainer.html('')
   } else {
      return;
   }
})

/* SPEC ADD FORM */
var selectType = $('#type')
var addInputBtn = $('#addInput')
var addBtn = $('#addSpec')
var specForm = $("#specForm")

function addInput () {
   var typeSelected = selectType.val()
   var input = '<div class="row field-group"><h3 class="text-center text-primary">'+typeSelected.toUpperCase()+'</h3><div class="form-group"><label>Title</label><input type="text" name="title" class="form-control" placeholder="Spec name" /></div><div class="form-group"><label>Data</label><textarea name="data" class="form-control" placeholder="Spec data" ></textarea></div><input type="hidden" name="type" value="'+typeSelected+'"></div>'
   
   specForm.append(input)
   addBtn.fadeIn()
}

addInputBtn.click(function(e){
   e.preventDefault()
   addInput()
})

addBtn.click(function(e){
   e.preventDefault()
   
   var fields = []
   
   fields.push($('.field-group'))
   
   var res = fields[0]
   
   console.log(res[0].children[3].value)
   
   
   /*fields.foreach(function(input){
      console.log(input)
   })*/
   
   /*
   $.ajax({
      method: 'POST',
      url: 'https://akaproject-sexypanda.c9users.io/akaproject/public/aka-admin/specifications',
      data: specForm.serialize()
   }).done(function(data){
      console.log(data)
   }).fail(function(jqXHR){
      console.log(jqXHR.responseText)
   })*/
})