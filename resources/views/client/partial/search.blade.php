<div class="container boking-inner">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                        <form action="{{route('tour.all')}}">
                            <div class="row">
                                <div class="col-xs-12 col-sm-9 col-md-10">
                                    <div class="row panel-margin">
                                        <div class="col-xs-6 col-sm-3 col-md-3 panel-padding">
                                            <label>Khởi Hành</label>
                                            <div class="icon-addon">
                                                <input type="text" placeholder="Date" class="form-control" name="from" id="from"/>
                                                <label class="glyphicon fa fa-calendar"  title="date"></label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 panel-padding">
                                            <label>Kết Thúc</label>
                                            <div class="icon-addon">
                                                <input type="text" placeholder="Date" class="form-control" name="to" id="to"/>
                                                <label class="glyphicon fa fa-calendar"  title="date"></label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-6 panel-padding">
                                            <label>Địa Danh</label>
                                            <!-- filters select -->
                                            <div class="select-filters">
                                                <select name="destination" class="tour">
                                                    @foreach ($dataDes as $item)
                                                        <option value="{{$item->id}}">{{$item->translation()->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2">
                                    <button type="submit" class="thm-btn">Tìm Tour</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
	<script>
		var dateToday = new Date();
		var dates = $("#from, #to").datepicker({
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 2,
			minDate: dateToday,
			onSelect: function(selectedDate) {
				var option = this.id == "from" ? "minDate" : "maxDate",
					instance = $(this).data("datepicker"),
					date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
				dates.not(this).datepicker("option", option, date);
			}
		});
	</script>
@endsection