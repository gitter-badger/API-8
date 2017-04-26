# AutoImportConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**input** | [**\Swagger\Client\Model\InputConfiguration**](InputConfiguration.md) |  | 
**input_configured_by_user_id** | [**\Swagger\Client\Model\BeezUPCommonUserId**](BeezUPCommonUserId.md) |  | 
**scheduling_type** | [**\Swagger\Client\Model\SchedulingType**](SchedulingType.md) |  | 
**scheduled_by_user_id** | [**\Swagger\Client\Model\BeezUPCommonUserId**](BeezUPCommonUserId.md) |  | [optional] 
**scheduling_value** | **string[]** | Indicate the scheduling value. If the scheduling type is Interval then the value will be a duration otherwise the values will be the time. | 
**paused** | **bool** | Indicate if the auto import is in pause or not. | [default to false]
**pause_status_changed_by_user_id** | [**\Swagger\Client\Model\BeezUPCommonUserId**](BeezUPCommonUserId.md) |  | [optional] 
**pause_status_changed_utc_date** | [**\DateTime**](\DateTime.md) | Indicate when the pause status has changed in UTC date. | [optional] 
**duplicate_product_configuration** | [**\Swagger\Client\Model\DuplicateProductValueConfiguration**](DuplicateProductValueConfiguration.md) |  | 
**scheduling_local_time_zone_name** | **string** | Indicate the time zone name of the scheduling. If the scheduling type is \&quot;Schedule\&quot; | [optional] [default to 'Romance Standard Time']

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


