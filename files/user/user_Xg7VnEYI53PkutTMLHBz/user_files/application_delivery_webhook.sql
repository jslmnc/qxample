/****** Staging  ******/
SELECT TOP (1000) [process_file_log_id]
      ,[input_source_file_log_id]
      ,[jobs_in_file]
      ,[is_loaded]
      ,[loaded_start_date]
      ,[loaded_end_date]
      ,[is_job_processed]
      ,[job_processing_start_date]
      ,[job_processing_end_date]
      ,[is_posting_processed]
      ,[posting_processing_start_date]
      ,[posting_processing_end_date]
      ,[created_date]
      ,[process_file_id]
      ,[is_source_routed]
      ,[source_routing_start_date]
      ,[source_routing_end_date]
      ,[source_routing_variance]
      ,[source_routing_variance_status]
  FROM [jobprocess].[process].[process_file_log]
  where input_source_file_log_id = 4029072





  select * from [jobprocess].[process].process_job_log where [process_file_log_id] = 362501




 select * from [64recs67o].[dbo].easy_apply_settings where job_id IN (30210524,30210525,30210526,30210527,30210528,30210529,30201706,30185635,30194113,30172313,30181508,30153411,30153416,30153418,30122864,30181509,30113820,30102841,30080882,30041450,30041451,29993049,29979189,29979193,29934067,29905205,29905207,29747739,29680554,29577508,29389055,29482023,29273070,29088534,29088537,28859250)
