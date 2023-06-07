<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<REMITTable2 xmlns="http://www.acer.europa.eu/REMIT/REMITTable2_V1.xsd">
    <reportingEntityID>
        <ace><?= $file['reporting_entity_id']?></ace>
    </reportingEntityID>
    <TradeList>
        <nonStandardContractReport>
            <RecordSeqNumber><?= $file['record_seq_number']?></RecordSeqNumber>
            <idOfMarketParticipant>
                <ace><?= $file['id_of_market_participant']?></ace>
            </idOfMarketParticipant>
            <otherMarketParticipant>
                <ace><?= $file['other_market_participant']?></ace>
            </otherMarketParticipant>
            <tradingCapacity><?= $file['trading_capacity']?></tradingCapacity>
            <buySellIndicator><?= $file['buy_sell_indicator']?></buySellIndicator>
            <contractId><?= $file['contract_id']?></contractId>
            <contractDate><?= date('Y-m-d', strtotime($file['contract_date'])) ?></contractDate>
            <contractType><?= $file['contract_type']?></contractType>
            <energyCommodity><?= $file['energy_commodity']?></energyCommodity>
            <priceOrPriceFormula>
                <priceFormula><?= $file['price_formula']?></priceFormula>
            </priceOrPriceFormula>
            <estimatedNotionalAmount>
                <value><?= $file['estimated_notional_amount_value']?></value>
                <currency><?= $file['estimated_notional_amount_unit']?></currency>
            </estimatedNotionalAmount>
            <totalNotionalContractQuantity>
                <value></value>
                <unit></unit>
            </totalNotionalContractQuantity>
            <volumeOptionality><?= $file['volume_optionality']?></volumeOptionality>
            <typeOfIndexPrice><?= $file['type_of_index_price']?></typeOfIndexPrice>
            <fixingIndexDetails>
                <fixingIndex><?= $file['fixing_index']?></fixingIndex>
                <fixingIndexType><?= $file['fixing_index_type']?></fixingIndexType>
                <fixingIndexSource><?= $file['fixing_index_source']?></fixingIndexSource>
                <firstFixingDate><?= date('Y-m-d', strtotime($file['first_fixing_date']))?></firstFixingDate>
                <lastFixingDate><?= date('Y-m-d', strtotime($file['last_fixing_date']))?></lastFixingDate>
                <fixingFrequency><?= $file['fixing_frequency']?></fixingFrequency>
            </fixingIndexDetails>
            <settlementMethod><?= $file['settlement_method']?></settlementMethod>
            <deliveryPointOrZone><?= $file['delivery_point_or_zone']?></deliveryPointOrZone>
            <deliveryStartDate><?= date('Y-m-d', strtotime($file['delivery_start_date']))?></deliveryStartDate>
            <deliveryEndDate><?= date('Y-m-d', strtotime($file['delivery_end_date']))?></deliveryEndDate>
            <loadType><?= $file['load_type']?></loadType>
            <actionType><?= $file['action_type']?></actionType>
        </nonStandardContractReport>
    </TradeList>
</REMITTable2>