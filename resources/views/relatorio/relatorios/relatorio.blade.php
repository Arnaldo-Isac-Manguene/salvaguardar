
                <form action="{{ route('relatorio.store') }}" method="POST" class="mx-1 form-group">
                    {{ csrf_field() }}
                    <h4 @style('color:#9fcd90')>I - EVALUATION OF ADMINISTRATIVE PERFORMANCE</h2>
                    <h5>1 -Safeguards Documents Required under the Contractor Contract	</h3><hr>
                    
                    <input value="{{ $refer }}" type="hidden" name="refProjecto">
                    <div class="d-flex mb-1"><label for="" class="col-8"></label><label  class="" style='height: 30px ;width: 70px' id="">Score</label><label style="width: 150px;height: 30px ;" class="ms-2" id="">YES/NO</label></div>

                    <div class="d-flex  mb-1"><label for="project-name" class="col-8 label-control">ESMP and HSP printed and available on site </label><input type="number" name="printedSite" style="width: 70px;height: 30px ;" class="ms-2 form-control" id=""><input type="text" name="printedSiteStatus" style="width: 150px;height: 30px ;" class="ms-2 form-control" id=""></div>
                    <div class="d-flex  mb-1"><label for="project-name" class="col-8 label-control">Code of Conduct posted at the Yard </label><input type="number" name="codeConduct" style="width: 70px;height: 30px ;" class="ms-2 form-control" id=""><input type="text" name="codeConductStatus" style="width: 150px;height: 30px ;" class="ms-2 form-control" id=""></div>
                    <div class="d-flex  mb-1"><label for="project-name" class="col-8 label-control">ESMP and HSP update on site </label><input type="number" name="updateSite" style="width: 70px;height: 30px ;" class="ms-2 form-control" id=""><input type="text" name="updateSiteStatus" style="width: 150px;height: 30px ;" class="ms-2 form-control" id=""></div>
                    <div class="d-flex  mb-1"><label for="project-name" class="col-8 label-control">Communication to the Ministry of Labor </label><input type="number" name="ministryLabor" style="width: 70px;height: 30px ;" class="ms-2 form-control" id=""><input type="text" name="ministryLaborStatus" style="width: 150px;height: 30px ;" class="ms-2 form-control" id=""></div>
                    <div class="d-flex  mb-1"><label for="project-name" class="col-8 label-control">Construction Work schedule </label><input type="number" name="workSchedule" style="width: 70px;height: 30px ;" class="ms-2 form-control" id=""><input type="text" name="workScheduleStatus" style="width: 150px;height: 30px ;" class="ms-2 form-control" id=""></div>
                    <div class="d-flex  mb-1"><label for="project-name" class="col-8 label-control">Organizational chart </label><input type="number" name="chartOrgan" style="width: 70px;height: 30px ;" class="ms-2 form-control" id=""><input type="text" name="chartOrganStatus" style="width: 150px;height: 30px ;" class="ms-2 form-control" id=""></div>
                    <div class="d-flex  mb-1"><label for="project-name" class="col-8 label-control">Method Statement for activities </label><input type="number" name="activite" style="width: 70px;height: 30px ;" class="ms-2 form-control" id=""><input type="text" name="activiteStatus" style="width: 150px;height: 30px ;" class="ms-2 form-control" id=""></div>
                    <div class="d-flex  mb-1"><label for="project-name" class="col-8 label-control"><b>Sub total</b> </label><input type="number" name="totalSub" style="width: 70px;height: 30px ;" class="ms-2 form-control" id=""><input  placeholder="Avaliação" type="text" name="totalSubStatus" style="width: 150px;height: 30px ;" class="ms-2 form-control" id=""></div>
                    <br>
                    <h5>2 - Monthly Report Delivery </h3><hr>

                    <div class="d-flex mb-1"><label for="" class="col-8"></label><label  class="" style='height: 30px ;width: 70px' id="">Score</label><label style="width: 150px;height: 30px ;" class="ms-2" id="">YES/NO</label>			</div>

                    <div class="d-flex  mb-1"><label for="project-name" class="col-8 label-control">Delivery by the 3rd of the following month <small> to contract specifications </small> </label><input type="number" name="delivery" style="width: 70px;height: 30px ;" class="ms-2 form-control" id=""><input type="text" name="deliveryStatus" style="width: 150px;height: 30px ;" class="ms-2 form-control" id=""></div>
                    <div class="d-flex  mb-1"><label for="project-name" class="col-8 label-control">Report according to requested topics</label><input type="number" name="report" style="width: 70px;height: 30px ;" class="ms-2 form-control" id=""><input type="text" name="reportStatus" style="width: 150px;height: 30px ;" class="ms-2 form-control" id=""></div>
                    <div class="d-flex  mb-1"><label for="project-name" class="col-8 label-control">Analytical and constructive report</label><input type="number" name="analytical" style="width: 70px;height: 30px ;" class="ms-2 form-control" id=""><input type="text" name="analyticalStatus" style="width: 150px;height: 30px ;" class="ms-2 form-control" id=""></div>
                    <div class="d-flex  mb-1"><label for="project-name" class="col-8 label-control"><b>Sub total</b> </label><input type="number" name="totalSub1" style="width: 70px;height: 30px ;" class="ms-2 form-control" id=""><input type="text" name="totalSub1Status" style="width: 150px;height: 30px ;" class="ms-2 form-control" id="" placeholder="Avaliação"></div>
                        
                       
                    <div class="justify-content-end my-2 d-flex  me-2">
                        <button type="submit"  class="btn btn-primary">Enviar</button>
                    </div>
                </form>