<!-- The Modal -->
  <div class="modal fade" id="myModal{{$category->id or '-'}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background: #a9332b;">
          <h4 class="modal-title" style="color: #fff;font-size: 22px;">Traders Detail</h4>
          <button type="button" class="close" data-dismiss="modal" style="margin-top: -38px;font-size: 30px;">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
         
              <div class="container-fluid">
                  <div class="row clearfix" style="background-color: #fff;">
                  
                  @php $options = json_decode($category->jsondata); @endphp
                  
                  @if($category->isQuestioned == 0)
                  <div class="body">

                    <div class="card">
                      <h3>Description</h3>
                          <div class="body">
                            <h4>{{$options->description}}</h4>
                          </div>
                            <h3>Long Description</h3>
                          <div class="body">
                            <h4>{{$options->long_description}}</h4>
                          </div>
                        </div>
                    </div>
                      
                  @else
                      @foreach ($options as $option) 
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="card">
                          <h3>{{$option->question->title}}</h3>
                              <div class="body">
                                @if($option->question->answer_type ==3)
                                 {{$option->answer}}
                                @else
                                  @php $newoptions = json_decode($option->question->options);@endphp
                                    @foreach($newoptions as $newoption)
                                      <input type="{{$option->question->answer_type == 1 ?  'radio' : 'checkbox'}}"   value="{{$newoption->value}}"   style="position: unset;opacity: 4;" disabled {{ $newoption->value == $option->answer ? 'checked' : '' }}/>
                                    {{$newoption->lable}}<br>
                                  @endforeach
                                @endif 
                              </div>
                              </div>
                          </div>
                      @endforeach
                  @endif
                  </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>