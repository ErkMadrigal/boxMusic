
  <style>
     @media only screen and (max-width: 1045px){
      .richText-editor{
        height: 15rem !important;
        width: 100%;
      }
      .toggler{
        width: 90%;
      }
    } 
    @media only screen and (max-width: 700px){
      .richText-editor{
        height: 15rem !important;
        width: 100%;
      }
      .richText{
        padding: 0;
        margin: -15px;
        width: 40rem;
      }
      .content{
        width: 50rem;
      }
    }
    
    @media only screen and (max-width: 600px){
      .richText-editor{
        height: 15rem !important;
        width: 100%;
      }
      .richText{
        padding: 0;
        margin: -15px;
        width: 24.5rem;

      }
      .content{
        width: 25rem;
      }
      
    }
  </style>
      <div class="page-wrapper box-content" style="margin-top:-5rem;">
          <h3 class="mt-5 mb-4">letra</h3>
          <textarea class="container form-control" require id="letra" name="letra"></textarea>
          <div class="invalid-tooltip">
              Por favor escriba la letra.
          </div> 
      </div>
  <script>
    $(document).ready(function() {
        $('#letra').richText();
    });
</script> 
 