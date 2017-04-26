# Rule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rule_id** | **string** | The identifier of the rule | 
**rule_name** | **string** | The name of the rule | 
**last_execution_status** | [**\Swagger\Client\Model\RuleLastExecutionStatus**](RuleLastExecutionStatus.md) |  | [optional] 
**last_execution_utc_date** | [**\DateTime**](\DateTime.md) | The utc date of the last execution | [optional] 
**action_name** | [**\Swagger\Client\Model\OptimisationActionName**](OptimisationActionName.md) |  | 
**report_filter_id** | **string** | Report filter identifier linked to the rule | 
**position** | **int** | Rule execution position | 
**enabled** | **bool** | Is the rule enabled | 
**validity_start_utc_date** | [**\DateTime**](\DateTime.md) | Rule validity start utc date | [optional] 
**validity_end_utc_date** | [**\DateTime**](\DateTime.md) | Rule validity end utc date | [optional] 
**links** | [**\Swagger\Client\Model\BeezUPCommonLink2[]**](BeezUPCommonLink2.md) | Links to retrieve/action on other entities | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


