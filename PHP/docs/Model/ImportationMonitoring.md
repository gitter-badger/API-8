# ImportationMonitoring

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | [**\Swagger\Client\Model\BeezUPCommonUserId**](BeezUPCommonUserId.md) |  | [optional] 
**success** | **bool** | Indicates if the importation was successfully completed or not | 
**execution_id** | [**\Swagger\Client\Model\ExecutionId**](ExecutionId.md) |  | 
**last_update_utc_date** | [**\DateTime**](\DateTime.md) | The last update of the reporting | 
**begin_utc_date** | [**\DateTime**](\DateTime.md) | The start date of the importation | 
**errors** | [**\Swagger\Client\Model\BeezUPCommonUserErrorMessage[]**](BeezUPCommonUserErrorMessage.md) | In case of error a description will be indicated | [optional] 
**steps** | **map[string,bool]** | Contains all steps of the importation process with a boolean. If true the step has been passed, false the step is not complete | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


