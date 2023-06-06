<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <div class="container my-5">
        <form method="post" action="<?= url_to('files'); ?>">
        <?= csrf_field() ?>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <label for"reportingEntityId">reportingEntityId</label>
                        <input name="reportingEntityId" type="text" placeholder="B0001064H.DE" class="form-control" />
                    </div>
                    <div>
                        <label for"reportingEntityIdType">reportingEntityId Type</label>
                        <select name="reportingEntityIdType" placeholder="ace" class="form-control">
                            <option value="ace" selected>ace</option>
                            <option value="lei">ace</option>
                            <option value="bic">ace</option>
                            <option value="eic">ace</option>
                            <option value="gln">ace</option>
                        </select>
                    </div>
                    <div>
                        <label for"recordSeqNumber">recordSeqNumber</label>
                        <input name="recordSeqNumber" type="number" placeholder="1" class="form-control" />
                    </div>
                    <div>
                        <label for"idOfMarketParticipant">idOfMarketParticipant</label>
                        <input name="idOfMarketParticipant" type="text" placeholder="A00023777.DE" class="form-control" />
                    </div>
                    <div>
                        <label for"idOfMarketParticipantType">idOfMarketParticipant Type</label>
                        <select name="idOfMarketParticipantType" placeholder="ace" class="form-control">
                            <option value="ace" selected>ace</option>
                            <option value="lei">ace</option>
                            <option value="bic">ace</option>
                            <option value="eic">ace</option>
                            <option value="gln">ace</option>
                        </select>
                    </div>
                    <div>
                        <label for"otherMarketParticipant">otherMarketParticipant</label>
                        <input name="otherMarketParticipant" type="text" placeholder="A00113777.DE" class="form-control" />
                    </div>
                    <div>
                        <label for"otherMarketParticipantType">otherMarketParticipant Type</label>
                        <select name="otherMarketParticipantType" placeholder="ace" class="form-control">
                            <option value="ace" selected>ace</option>
                            <option value="lei">ace</option>
                            <option value="bic">ace</option>
                            <option value="eic">ace</option>
                            <option value="gln">ace</option>
                        </select>
                    </div>
                    <div>
                        <label for"tradingCapacity">tradingCapacity</label>
                        <input name="tradingCapacity" type="text" placeholder="P" class="form-control" />
                    </div>
                    <div>
                        <label for"buySellIndicator">buySellIndicator</label>
                        <input name="buySellIndicator" type="text" placeholder="S" class="form-control" />
                    </div>
                    <div>
                        <label for"contractId">contractId</label>
                        <input name="contractId" type="text" placeholder="AQN1qaRf20kwi0GbI3tJlkwqp2z0OlFqVEWUCHTEST001" class="form-control" />
                    </div>
                    <div>
                        <label for"contractDate">contractDate</label>
                        <input name="contractDate" type="date" value="2021-11-29" class="form-control" />
                    </div>
                    <div>
                        <label for"contractType">contractType</label>
                        <input name="contractType" type="text" placeholder="FW" class="form-control" />
                    </div>
                    <div>
                        <label for"energyCommodity">energyCommodity</label>
                        <input name="energyCommodity" type="text" placeholder="EL" class="form-control" />
                    </div>
                    <div>
                        <label for"priceFormula">priceFormula</label>
                        <input name="priceFormula" type="text" placeholder="0,51*DEBY+0,22*DEPY" class="form-control" />
                    </div>
                    <div>
                        <label for"estimatedNotionalAmountValue">estimatedNotionalAmountValue</label>
                        <input name="estimatedNotionalAmountValue" type="number" placeholder="0" class="form-control" />
                    </div>
                    <div>
                        <label for"estimatedNotionalAmountUnit">estimatedNotionalAmountUnit</label>
                        <input name="estimatedNotionalAmountUnit" type="text" placeholder="MWh" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <label for"volumeOptionality">volumeOptionality</label>
                        <input name="volumeOptionality" type="text" placeholder="V" class="form-control" />
                    </div>
                    <div>
                        <label for"typeOfIndexPrice">typeOfIndexPrice</label>
                        <input name="typeOfIndexPrice" type="text" placeholder="I" class="form-control" />
                    </div>
                    <div>
                        <label for"fixingIndex">fixingIndex</label>
                        <input name="fixingIndex" type="text" placeholder="EEX DE Settlement" class="form-control" />
                    </div>
                    <div>
                        <label for"fixingIndexType">fixingIndexType</label>
                        <input name="fixingIndexType" type="text" placeholder="FU" class="form-control" />
                    </div>
                    <div>
                        <label for"fixingIndexSource">fixingIndexSource</label>
                        <input name="fixingIndexSource" type="text" placeholder="EEX" class="form-control" />
                    </div>
                    <div>
                        <label for"firstFixingDate">firstFixingDate</label>
                        <input name="firstFixingDate" type="date" value="2021-11-29" class="form-control" />
                    </div>
                    <div>
                        <label for"lastFixingDate">lastFixingDate</label>
                        <input name="lastFixingDate" type="date" value="2022-12-15" class="form-control" />
                    </div>
                    <div>
                        <label for"fixingFrequency">fixingFrequency</label>
                        <input name="fixingFrequency" type="number" placeholder="0" class="form-control" />
                    </div>
                    <div>
                        <label for"settlementMethod">settlementMethod</label>
                        <input name="settlementMethod" type="text" placeholder="P" class="form-control" />
                    </div>
                    <div>
                        <label for"deliveryPointOrZone">deliveryPointOrZone</label>
                        <input name="deliveryPointOrZone" type="text" placeholder="10YDE-VE-------2" class="form-control" />
                    </div>
                    <div>
                        <label for"deliveryStartDate">deliveryStartDate</label>
                        <input name="deliveryStartDate" type="date" value="2022-01-01" class="form-control" />
                    </div>
                    <div>
                        <label for"deliveryEndDate">deliveryEndDate</label>
                        <input name="deliveryEndDate" type="date" value="2023-12-31" class="form-control" />
                    </div>
                    <div>
                        <label for"loadType">loadType</label>
                        <input name="loadType" type="text" placeholder="SH" class="form-control" />
                    </div>
                    <div>
                        <label for"actionType">actionType</label>
                        <input name="actionType" type="text" placeholder="N" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <input type="submit" value="Create" class="form-control btn btn-success">
                </div>
            </div>
        </form>
    </div>
<?= $this->endSection() ?>