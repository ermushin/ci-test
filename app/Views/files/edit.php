<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <div class="container my-5">
    <?= session()->getFlashdata('error') ?>
    <?= validation_list_errors() ?>
    <?php if (! empty($errors)): ?>
        <div class="alert alert-danger">
        <?php foreach ($errors as $field => $error): ?>
            <p><?= esc($error) ?></p>
        <?php endforeach ?>
        </div>
    <?php endif ?>
        <form method="post" action="<?= url_to('files.update', $file['id']); ?>">
        <input type="hidden" name="_method" value="put" />
        <?= csrf_field() ?>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <label for"reportingEntityId">reportingEntityId</label>
                        <input name="reportingEntityId" type="text" placeholder="B0001064H.DE" class="form-control" value="<?= $file['reporting_entity_id'] ?>" />
                    </div>
                    <div>
                        <label for"reportingEntityIdType">reportingEntityId Type</label>
                        <select name="reportingEntityIdType" placeholder="ace" class="form-control">
                            <option value="ace" selected>ace</option>
                            <option value="lei">lei</option>
                            <option value="bic">bic</option>
                            <option value="eic">eic</option>
                            <option value="gln">gln</option>
                        </select>
                    </div>
                    <div>
                        <label for"recordSeqNumber">recordSeqNumber</label>
                        <input name="recordSeqNumber" type="number" placeholder="1" class="form-control" value="<?= $file['record_seq_number'] ?>" />
                    </div>
                    <div>
                        <label for"idOfMarketParticipant">idOfMarketParticipant</label>
                        <input name="idOfMarketParticipant" type="text" placeholder="A00023777.DE" class="form-control" value="<?= $file['id_of_market_participant'] ?>" />
                    </div>
                    <div>
                        <label for"idOfMarketParticipantType">idOfMarketParticipant Type</label>
                        <select name="idOfMarketParticipantType" placeholder="ace" class="form-control">
                            <option value="ace" selected>ace</option>
                            <option value="lei">lei</option>
                            <option value="bic">bic</option>
                            <option value="eic">eic</option>
                            <option value="gln">gln</option>
                        </select>
                    </div>
                    <div>
                        <label for"otherMarketParticipant">otherMarketParticipant</label>
                        <input name="otherMarketParticipant" type="text" placeholder="A00113777.DE" class="form-control" value="<?= $file['other_market_participant'] ?>" />
                    </div>
                    <div>
                        <label for"otherMarketParticipantType">otherMarketParticipant Type</label>
                        <select name="otherMarketParticipantType" placeholder="ace" class="form-control">
                            <option value="ace" selected>ace</option>
                            <option value="lei">lei</option>
                            <option value="bic">bic</option>
                            <option value="eic">eic</option>
                            <option value="gln">gln</option>
                        </select>
                    </div>
                    <div>
                        <label for"tradingCapacity">tradingCapacity</label>
                        <input name="tradingCapacity" type="text" placeholder="P" class="form-control" value="<?= $file['trading_capacity'] ?>" />
                    </div>
                    <div>
                        <label for"buySellIndicator">buySellIndicator</label>
                        <input name="buySellIndicator" type="text" placeholder="S" class="form-control" value="<?= $file['buy_sell_indicator'] ?>" />
                    </div>
                    <div>
                        <label for"contractId">contractId</label>
                        <input name="contractId" type="text" placeholder="AQN1qaRf20kwi0GbI3tJlkwqp2z0OlFqVEWUCHTEST001" class="form-control" value="<?= $file['contract_id'] ?>" />
                    </div>
                    <div>
                        <label for"contractDate">contractDate</label>
                        <input name="contractDate" type="date" class="form-control" value="<?= date('Y-m-d', strtotime($file['contract_date'])) ?>" />
                    </div>
                    <div>
                        <label for"contractType">contractType</label>
                        <input name="contractType" type="text" placeholder="FW" class="form-control" value="<?= $file['contract_type'] ?>" />
                    </div>
                    <div>
                        <label for"energyCommodity">energyCommodity</label>
                        <input name="energyCommodity" type="text" placeholder="EL" class="form-control" value="<?= $file['energy_commodity'] ?>" />
                    </div>
                    <div>
                        <label for"priceFormula">priceFormula</label>
                        <input name="priceFormula" type="text" placeholder="0,51*DEBY+0,22*DEPY" class="form-control" value="<?= $file['price_formula'] ?>" />
                    </div>
                    <div>
                        <label for"estimatedNotionalAmountValue">estimatedNotionalAmountValue</label>
                        <input name="estimatedNotionalAmountValue" type="number" placeholder="0" class="form-control" value="<?= $file['estimated_notional_amount_value'] ?>" />
                    </div>
                    <div>
                        <label for"estimatedNotionalAmountUnit">estimatedNotionalAmountUnit</label>
                        <input name="estimatedNotionalAmountUnit" type="text" placeholder="MWh" class="form-control" value="<?= $file['estimated_notional_amount_unit'] ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <label for"volumeOptionality">volumeOptionality</label>
                        <input name="volumeOptionality" type="text" placeholder="V" class="form-control" value="<?= $file['volume_optionality'] ?>" />
                    </div>
                    <div>
                        <label for"typeOfIndexPrice">typeOfIndexPrice</label>
                        <input name="typeOfIndexPrice" type="text" placeholder="I" class="form-control" value="<?= $file['type_of_index_price'] ?>" />
                    </div>
                    <div>
                        <label for"fixingIndex">fixingIndex</label>
                        <input name="fixingIndex" type="text" placeholder="EEX DE Settlement" class="form-control" value="<?= $file['fixing_index'] ?>" />
                    </div>
                    <div>
                        <label for"fixingIndexType">fixingIndexType</label>
                        <input name="fixingIndexType" type="text" placeholder="FU" class="form-control" value="<?= $file['fixing_index_type'] ?>" />
                    </div>
                    <div>
                        <label for"fixingIndexSource">fixingIndexSource</label>
                        <input name="fixingIndexSource" type="text" placeholder="EEX" class="form-control" value="<?= $file['fixing_index_source'] ?>" />
                    </div>
                    <div>
                        <label for"firstFixingDate">firstFixingDate</label>
                        <input name="firstFixingDate" type="date" class="form-control" value="<?= date('Y-m-d', strtotime($file['first_fixing_date'])) ?>" />
                    </div>
                    <div>
                        <label for"lastFixingDate">lastFixingDate</label>
                        <input name="lastFixingDate" type="date" class="form-control" value="<?= date('Y-m-d', strtotime($file['last_fixing_date'])) ?>" />
                    </div>
                    <div>
                        <label for"fixingFrequency">fixingFrequency</label>
                        <input name="fixingFrequency" type="number" placeholder="0" class="form-control" value="<?= $file['fixing_frequency'] ?>" />
                    </div>
                    <div>
                        <label for"settlementMethod">settlementMethod</label>
                        <input name="settlementMethod" type="text" placeholder="P" class="form-control" value="<?= $file['settlement_method'] ?>" />
                    </div>
                    <div>
                        <label for"deliveryPointOrZone">deliveryPointOrZone</label>
                        <input name="deliveryPointOrZone" type="text" placeholder="10YDE-VE-------2" class="form-control" value="<?= $file['delivery_point_or_zone'] ?>" />
                    </div>
                    <div>
                        <label for"deliveryStartDate">deliveryStartDate</label>
                        <input name="deliveryStartDate" type="date" class="form-control" value="<?= date('Y-m-d', strtotime($file['delivery_start_date'])) ?>" />
                    </div>
                    <div>
                        <label for"deliveryEndDate">deliveryEndDate</label>
                        <input name="deliveryEndDate" type="date" class="form-control" value="<?= date('Y-m-d', strtotime($file['delivery_end_date'])) ?>" />
                    </div>
                    <div>
                        <label for"loadType">loadType</label>
                        <input name="loadType" type="text" placeholder="SH" class="form-control" value="<?= $file['load_type'] ?>" />
                    </div>
                    <div>
                        <label for"actionType">actionType</label>
                        <input name="actionType" type="text" placeholder="N" class="form-control" value="<?= $file['action_type'] ?>" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <input type="submit" value="Update" class="form-control btn btn-success">
                </div>
            </div>
        </form>
    </div>
<?= $this->endSection() ?>