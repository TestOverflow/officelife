<?php

return [
    'home_title' => 'Administration of your OfficeLife account',
    'home_role_administrator' => 'As an <span class="fw5 brush-blue">human resource representative</span>, you can…',
    'home_role_owner' => 'As an <span class="fw5 brush-orange">owner</span>, you can…',
    'home_manage_employees' => 'Add/remove existing employees',
    'home_manage_positions' => 'Add/remove job positions',
    'home_manage_teams' => 'Add/remove teams',
    'home_manage_flows' => 'Add/remove flows',
    'home_manage_employee_statuses' => 'Add/remove employee statuses',
    'home_company_news' => 'Add/remove company news',
    'home_audit_log' => 'View audit log to see who has done what',
    'home_manage_pto' => 'Manage paid time off policies',
    'home_manage_questions' => 'Manage questions',
    'home_manage_hardware' => 'Manage hardware',
    'home_manage_expenses' => 'Manage expenses',
    'home_general_settings' => 'General settings',

    'employees_title' => 'All the employees in {company}',
    'employees_number_employees' => '{company} has {count} employees.',
    'employees_cta' => 'Add an employee',
    'employees_lock_account' => 'Lock account',
    'employees_unlock_account' => 'Unlock account',
    'employees_change_permission' => 'Change permission',

    'employee_delete_title' => 'Delete all information about {name}',
    'employee_delete_description' => 'You are about to remove {name} from OfficeLife. This will effectively delete all information we know about this person. We will revoke all possible access to OfficeLife immediately.',
    'employee_delete_success' => 'The employee has been deleted with success.',

    'employee_lock_title' => 'Lock {name}’s account',
    'employee_lock_description' => 'Are you sure you want to lock {name}’s account? Locking an account has a lot of implications. You can unlock the account anytime.',
    'employee_lock_success' => 'The employee has been locked with success.',

    'employee_unlock_title' => 'Unlock {name}’s account',
    'employee_unlock_description' => 'Are you sure you want to unlock {name}’s account? Unlocking an account is immediate.',
    'employee_unlock_success' => 'The employee has been unlocked with success.',

    'employee_new_basic_information' => 'Basic information',
    'employee_new_title' => 'Add an employee to {name}',
    'employee_new_firstname' => 'First name',
    'employee_new_lastname' => 'Last name',
    'employee_new_email' => 'Email address',
    'employee_new_permission_level' => 'Permissions',
    'employee_new_administrator' => 'Administrator',
    'employee_new_hr' => 'Human Resource Representative',
    'employee_new_user' => 'Employee',
    'employee_new_administrator_desc' => 'Can do everything, including account management.',
    'employee_new_hr_desc' => 'Have access to most features, including reading and writing private information, but can\'t manage the account itself.',
    'employee_new_user_desc' => 'Can see all teams and employees, but can not manage the account or read private information.',
    'employee_new_send_email' => 'Send an email to this person with a link to setup the account.',
    'employee_new_send_email_optional' => 'This is optional - you will be able to invite this person later.',

    'teams_title' => 'All the teams listed in {company}',
    'teams_number_teams' => '{company} has one team. | {company} has {count} teams.',
    'teams_cta' => 'Add a team',
    'teams_blank' => 'Teams are a great way for groups of people in your company to work together in officelife.',
    'team_new_name' => 'Name of the team',
    'team_creation_success' => 'The team has been created.',
    'team_update_success' => 'The team has been updated.',
    'team_destroy_success' => 'The team has been deleted.',
    'team_visit_page' => 'Visit team page',
    'team_view_audit_logs' => 'View audit logs',
    'team_confirm_deletion' => 'Are you sure you want to delete the team called {name}? This will remove all the team members from this team, as well as delete all the notes, news and associated data with it.',

    'employee_statuses_title' => 'All the employee statuses in {company}',
    'employee_statuses_number_positions' => '{company} has one employee status. | {company} has {count} employee statuses.',
    'employee_statuses_cta' => 'Add an employee status',
    'employee_statuses_blank' => 'Statuses are terms that describe the employment status of an employee. Like full-time, part-time, etc....',
    'employee_statuses_new_title' => 'Status name',
    'employee_statuses_placeholder' => 'Full-time',
    'employee_statuses_success_new' => 'The employee status has been created',
    'employee_statuses_success_update' => 'The employee status has been updated',
    'employee_statuses_success_destroy' => 'The employee status has been destroyed',

    'positions_title' => 'All the positions used in {company}',
    'positions_number_positions' => '{company} has one position. | {company} has {count} positions.',
    'positions_cta' => 'Add a position',
    'positions_blank' => 'Positions are terms that describe in a few words what an employee does. Like Marketing Coordinator for example.',
    'position_new_title' => 'Position name',
    'position_success_new' => 'The position has been created',
    'position_success_update' => 'The position has been updated',
    'position_success_destroy' => 'The position has been destroyed',

    'flows_title' => 'All the flows in {company}',
    'flows_cta' => 'Create a flow',
    'flows_number_flows' => '{company} has one flow. | {company} has {count} flows.',
    'flows_blank' => 'Flows lets you define how the system should react when something in the company happens. It’s... quite powerful.',
    'flow_new_flow' => 'What is the name of the flow?',
    'flow_new_help' => 'This is an internal name, only used to identify the flow.',
    'flow_new_days' => 'days',
    'flow_new_weeks' => 'weeks',
    'flow_new_months' => 'months',
    'flow_new_before' => 'before',
    'flow_new_after' => 'after',
    'flow_new_type_employee_joins_company' => 'An employee joins the company',
    'flow_new_type_employee_leaves_company' => 'An employee leaves the company',
    'flow_new_type_employee_birthday' => 'An employee has a birthday',
    'flow_new_type_employee_joins_team' => 'An employee is added to a team',
    'flow_new_type_employee_leaves_team' => 'An employee is removed from a team',
    'flow_new_type_employee_becomes_manager' => 'An employee becomes a manager',
    'flow_new_type_employee_new_position' => 'An employee has a new position',
    'flow_new_type_employee_leaves_holidays' => 'An employee leaves for holidays',
    'flow_new_type_employee_returns_holidays' => 'An employee comes back from holidays',
    'flow_new_type_employee_returns_leave' => 'An employee returns from a leave',
    'flow_new_the_day_event_happens' => 'The moment this event happens',
    'flow_new_action_following' => 'Do the following',
    'flow_new_action_notification' => 'Notify an employee',
    'flow_new_action_task' => 'Add a task',
    'flow_new_action_email' => 'Send an email',
    'flow_new_action_notification_actual_employee' => 'The actual employee',
    'flow_new_action_notification_specific_employee' => 'A specific employee',
    'flow_new_action_notification_manager' => 'The employee’s manager(s)',
    'flow_new_action_notification_report' => 'The employee’s direct report(s)',
    'flow_new_action_notification_team_members' => 'All the employee’s teams members',
    'flow_new_action_notification_specific_team' => 'A specific team',
    'flow_new_action_notification_everyone' => 'Everyone in the company',
    'flow_new_action_notification_confirmation' => 'Are you sure? This will alert all the employees of the company.',
    'flow_new_action_notification_search_employees' => 'Search an employee',
    'flow_new_action_notification_search_hint' => 'Type the first letters of the name',
    'flow_new_action_notification_search_teams' => 'Search a team',
    'flow_new_action_remove' => 'Remove action',
    'flow_new_action_label_actual_employee' => 'the actual employee',
    'flow_new_action_label_everyone' => 'everyone in the company',
    'flow_new_action_label_managers' => 'the manager(s) of the employee',
    'flow_new_action_label_reports' => 'the direct report(s) of the employee',
    'flow_new_action_label_team_employee' => 'the team of the employee',
    'flow_new_action_label_employee' => 'an employee',
    'flow_new_action_label_unknown_message' => 'an unknown message',

    // account logs
    'log_account_created' => 'Created the account.',
    'log_employee_added_to_company' => 'Added :employee as an employee.',
    'log_employee_destroyed' => 'Deleted the employee named :employee.',
    'log_employee_locked' => 'Locked the account of the employee named :employee.',
    'log_employee_unlocked' => 'Unlocked the account of the employee named :employee.',
    'log_team_created' => 'Created the team called :name.',
    'log_team_updated' => 'Changed the name of the team from :old_name to :new_name.',
    'log_team_destroyed' => 'Deleted the team called :name.',
    'log_employee_added_to_team' => 'Added :employee to :team.',
    'log_employee_removed_from_team' => 'Removed :employee from :team.',
    'log_employee_updated' => 'Updated information about :employee.',
    'log_employee_updated_hiring_information' => 'Updated hiring about :employee.',
    'log_manager_assigned' => 'Assigned :name as the manager of :employee.',
    'log_manager_unassigned' => 'Removed :name as the manager of :employee.',
    'log_employee_invited_to_become_user' => 'Sent an invitation to :employee to join the company.',
    'log_position_created' => 'Created a position called :name.',
    'log_position_updated' => 'Updated the position formely called :former_name to :new_name.',
    'log_position_destroyed' => 'Destroyed the position called :name.',
    'log_position_assigned' => 'Assigned the position called :name to :employee.',
    'log_position_removed' => 'Removed the position called :name to :employee.',
    'log_flow_created' => 'Created the flow called :name.',
    'log_employee_worklog_logged' => 'Added a worklog.',
    'log_employee_status_created' => 'Added an employee status called :name.',
    'log_employee_status_updated' => 'Updated the name of the employee status from :former_name to :new_name.',
    'log_employee_status_destroyed' => 'Destroyed the employee status called :name.',
    'log_employee_status_assigned' => 'Assigned the employee status called :name to :employee.',
    'log_employee_status_removed' => 'Removed the employee status called :name from :employee.',
    'log_company_news_created' => 'Wrote a company news called :name.',
    'log_company_news_updated' => 'Updated the news called :name.',
    'log_company_news_destroyed' => 'Destroyed the news called :name.',
    'log_employee_morale_logged' => 'Added an emotion on how the day went.',
    'log_company_pto_policy_created' => 'Created a company PTO policy for :year.',
    'log_company_pto_policy_updated' => 'Updated the company PTO policy for the year :year.',
    'log_company_time_off_created' => 'Added a new time off for :date.',
    'log_company_time_off_destroyed' => 'Removed a time off for :date.',
    'log_employee_address_set' => 'Added an address at :address.',
    'log_employee_pronoun_set' => 'Assigned the pronoun called :name to :employee.',
    'log_employee_pronoun_removed' => 'Removed the gender pronoun from :name.',
    'log_employee_description_set' => 'Set a personal description to :name.',
    'log_employee_description_cleared' => 'Cleared the personal description of :name.',
    'log_employee_birthday_set' => 'Set the birthdate of :name.',
    'log_team_description_set' => 'Set the description of the team called :name.',
    'log_team_description_cleared' => 'Cleared the description of the team called :name.',
    'log_team_useful_link_created' => 'Added a link called :link_name to the team called :name.',
    'log_team_useful_link_updated' => 'Updated the link called :link_name to the team called :name.',
    'log_team_useful_link_destroyed' => 'Removed the link called :link_name to the team called :name.',
    'log_team_news_created' => 'Wrote a news called :news_name for the team called :name.',
    'log_team_news_updated' => 'Updated the news called :news_name for the team called :name.',
    'log_team_news_destroyed' => 'Deleted the news called :news_name for the team called :name.',
    'log_employee_personal_details_set' => 'Set the employee name and email address to :name and :email.',
    'log_team_leader_assigned' => 'Assigned :name as the team leader of the team called :team_name.',
    'log_team_leader_removed' => 'Removed :name as the team lead of the team called :team_name.',
    'log_employee_work_from_home_logged' => 'Indicated that :name has worked from home on :date.',
    'log_employee_work_from_home_destroyed' => 'Removed the entry that :name has worked from home on :date.',
    'log_question_created' => 'Added a question called :title.',
    'log_question_updated' => 'Updated the question from :old_title to :title.',
    'log_question_destroyed' => 'Deleted the question called :title.',
    'log_question_activated' => 'Enabled the question called :title.',
    'log_question_deactivated' => 'Disabled the question called :title.',
    'log_answer_created' => 'Answered the question called :title.',
    'log_answer_updated' => 'Updated the answer to the question called :title.',
    'log_answer_destroyed' => 'Deleted the answer to the question called :title.',
    'log_hardware_created' => 'Added a hardware called :name.',
    'log_hardware_updated' => 'Updated the hardware name from :old_name to :name.',
    'log_hardware_destroyed' => 'Deleted the hardware called :name.',
    'log_hardware_lent' => 'Lent the hardware named :hardware_name to :employee_name.',
    'log_hardware_regained' => 'Took back the hardware named :hardware_name from :employee_name.',
    'log_recent_ship_created' => 'Created a recent ship entry called :ship_title associated to the team called :team_name.',
    'log_recent_ship_destroyed' => 'Deleted the recent ship entry called :ship_title associated in the team called :team_name.',
    'log_employee_attached_to_recent_ship' => 'Associated the employee called :employee_name with the recent ship entry called :ship_title in the team called :team_name.',
    'log_skill_created' => 'Created the skill called :skill_name.',
    'log_skill_associated_with_employee' => 'Associated the skill called :skill_name to :name.',
    'log_skill_removed_from_an_employee' => 'Removed the skill called :skill_name from :name.',
    'log_skill_destroyed' => 'Deleted the skill called :name.',
    'log_skill_updated' => 'Updated the skill’s name from :skill_old_name to :skill_new_name.',
    'log_expense_category_created' => 'Created the expense category called :name.',
    'log_expense_category_updated' => 'Updated the expense category’s name from :old_name to :new_name.',
    'log_expense_category_destroyed' => 'Deleted the expense category called :name.',
    'log_task_created' => 'Created the task called :title for :name.',
    'log_company_renamed' => 'Renamed the company from :old_name to :new_name.',
    'log_company_currency_updated' => 'Changed the company’s currency from :old_currency to :new_currency.',
    'log_expense_created' => 'Created an expense about :expense_title for an amount of :expense_amount.',
    'log_expense_accepted_by_manager' => 'Accepted an expense for :employee_name about :expense_title for an amount of :expense_amount.',
    'log_expense_rejected_by_manager' => 'Rejected an expense for :employee_name about :expense_title for an amount of :expense_amount.',
    'log_expense_accepted_by_accounting' => 'As accountant, accepted an expense for :employee_name about :expense_title for an amount of :expense_amount.',
    'log_expense_rejected_by_accounting' => 'As accountant, rejected an expense for :employee_name about :expense_title for an amount of :expense_amount.',
    'log_employee_allowed_to_manage_expenses' => 'Allowed :employee_name to manage company’s expenses.',
    'log_employee_disallowed_to_manage_expenses' => 'Disallowed :employee_name to manage company’s expenses.',

    // employee logs
    'employee_log_employee_created' => 'Created this employee entry.',
    'employee_log_employee_locked' => 'Locked this employee entry.',
    'employee_log_employee_unlocked' => 'Unlocked this employee entry.',
    'employee_log_manager_assigned' => 'Assigned :name as a manager.',
    'employee_log_direct_report_assigned' => 'Assigned :name as a direct report.',
    'employee_log_manager_unassigned' => 'Removed :name as a manager.',
    'employee_log_direct_report_unassigned' => 'Removed :name as a direct report.',
    'employee_log_position_assigned' => 'Assigned the position called :name.',
    'employee_log_position_removed' => 'Removed the position called :name.',
    'employee_log_employee_added_to_team' => 'Added to the team called :name.',
    'employee_log_employee_removed_from_team' => 'Removed from the team called :name.',
    'employee_log_employee_worklog_logged' => 'Added a worklog.',
    'employee_log_employee_status_assigned' => 'Assigned the employee status called :name.',
    'employee_log_employee_status_removed' => 'Removed the employee status called :name.',
    'employee_log_morale_logged' => 'Added an emotion on how the day went.',
    'employee_log_time_off_created' => 'Added a new time off for :date.',
    'employee_log_time_off_destroyed' => 'Removed a time off for :date.',
    'employee_log_address_set' => 'Added an address at :address.',
    'employee_log_pronoun_set' => 'Assigned the pronoun called :name.',
    'employee_log_pronoun_removed' => 'Removed the gender pronoun.',
    'employee_log_description_set' => 'Set a personal description.',
    'employee_log_description_cleared' => 'Cleared the personal description.',
    'employee_birthday_set' => 'Set the birthdate.',
    'employee_personal_details_set' => 'Set the name and email to :name and :email.',
    'employee_log_work_from_home_logged' => 'Worked from home on :date.',
    'employee_log_work_from_home_destroyed' => 'Removed the entry about working from home on :date.',
    'employee_log_answer_created' => 'Answered the question called :title.',
    'employee_log_answer_updated' => 'Updated the answer of the question called :title.',
    'employee_log_answer_destroyed' => 'Deleted the answer of the question called :title.',
    'employee_log_employee_attached_to_recent_ship' => 'Associated with the recent ship entry called :ship_title in the team called :team_name.',
    'employee_log_skill_associated_with_employee' => 'Has been associated with the skill called :name.',
    'employee_log_skill_removed_from_an_employee' => 'Has had the skill called :name removed.',
    'employee_log_task_created' => 'Created the task called :title.',
    'employee_log_expense_created' => 'Created an expense about :expense_title for an amount of :expense_amount.',
    'employee_log_expense_accepted_by_manager' => 'Has been accepted an expense about :expense_title for an amount of :expense_amount.',
    'employee_log_expense_accepted_for_employee' => 'Accepted an expense for :employee_name about :expense_title for an amount of :expense_amount.',
    'employee_log_expense_rejected_for_employee' => 'Rejected an expense for :employee_name about :expense_title for an amount of :expense_amount.',
    'employee_log_expense_rejected_by_manager' => 'Rejected an expense about :expense_title for an amount of :expense_amount.',
    'employee_log_expense_accepted_by_accounting_for_employee' => 'As accountant, accepted an expense for :employee_name about :expense_title for an amount of :expense_amount.',
    'employee_log_expense_accepted_by_accounting' => 'Has been accepted an expense by the accounting department about :expense_title for an amount of :expense_amount.',
    'employee_log_expense_rejected_by_accounting_for_employee' => 'As accountant, has rejected an expense for :employee_name about :expense_title for an amount of :expense_amount.',
    'employee_log_expense_rejected_by_accounting' => 'Has been rejected by the accounting department an expense about :expense_title for an amount of :expense_amount.',
    'employee_log_employee_allowed_to_manage_expenses' => 'Has been allowed to manage company’s expenses.',
    'employee_log_employee_disallowed_to_manage_expenses' => 'Has been disallowed to manage company’s expenses.',

    // team logs
    'team_log_team_created' => 'Created the team.',
    'team_log_team_updated' => 'Changed the name from :old_name to :new_name.',
    'team_log_employee_added_to_team' => 'Added :employee_name to the team.',
    'team_log_employee_removed_from_team' => 'Removed :employee_name from the team.',
    'team_log_team_leader_assigned' => 'Assigned :name as the team leader.',
    'team_log_team_leader_removed' => 'Removed :name as the team leader.',
    'team_log_description_set' => 'Set the team’s description',
    'team_log_description_cleared' => 'Cleared the teams’s description',
    'team_log_useful_link_created' => 'Added a link called :name.',
    'team_log_useful_link_updated' => 'Updated the link called :name.',
    'team_log_useful_link_destroyed' => 'Destroyed the link called :name.',
    'team_log_team_news_created' => 'Wrote a news called :name.',
    'team_log_team_news_updated' => 'Updated the news called :title.',
    'team_log_team_news_destroyed' => 'Deleted the news called :title.',
    'team_log_recent_ship_created' => 'Created a new recent ship called :title.',
    'team_log_ship_destroyed' => 'Deleted the recent ship called :title.',

    'notification_dummy_data_generated' => 'Dummy data have been generated for :name.',
    'notification_employee_added_to_company' => 'You have been added to :name.',
    'notification_employee_added_to_team' => 'You have been added to the team called :name.',
    'notification_employee_removed_from_team' => 'You have been removed from the team called :name.',
    'notification_team_lead_set' => 'You have been assigned as the team lead for the team called :name.',
    'notification_team_lead_removed' => 'You are not longer the team lead of the team called :name.',
    'notification_employee_attached_to_recent_ship' => 'You have been associated with the recent ship called :title.',
    'notification_task_assigned' => 'You have been assigned the task called :title by :name.',
    'notification_expense_assigned_for_validation' => 'You have a new expense to validate for :name.',
    'notification_expense_accepted_by_manager' => 'Your expense called :title has been accepted by your manager and is now in the hand of the accounting department.',
    'notification_expense_rejected_by_manager' => 'Your expense called :title has been rejected by your manager.',
    'notification_employee_allowed_to_manage_expenses' => 'You are now allowed to manage company’s expenses.',
    'notification_expense_accepted_by_accounting' => 'Your expense called :title has been approved by the accounting department.',
    'notification_expense_rejected_by_accounting' => 'Your expense called :title has been rejected by the accounting department.',

    'morale_1' => 'Positive',
    'morale_2' => 'Neutral',
    'morale_3' => 'Negative',

    'company_news_title' => 'Company news',
    'company_news_blank' => 'Do you need to broadcast an announcement or a news to every employee of your company? You can do so here!',
    'company_news_number_news' => '{company} has {count} company news.',
    'company_news_cta' => 'Add a company news',
    'company_news_written_by' => 'Written by {name} on {date}',
    'company_news_success_destroy' => 'The company news has been deleted with success.',
    'company_news_new_headline' => 'Add a company news',
    'company_news_new_title' => 'Title of the news',
    'company_news_new_title_help' => 'Keep it short, interesting. Also, add an emoji.',
    'company_news_new_content' => 'Write something interesting',
    'company_news_new_content_help' => 'Everyone in the company will be able to read this news. Make sure you are not saying something silly.',
    'company_news_edit_headline' => 'Edit a company news',
    'company_news_create_success' => 'The news has been published',
    'company_news_update_success' => 'The news has been updated',

    'pto_policies_edit_title_1' => 'As software makers, we think it’s our responsability to promote a culture where employees are actually trusted and autonomous.',
    'pto_policies_edit_title_2' => 'We have a very limited set of features around Paid Time Offs (a barbaric name that refers to the holidays employees are allowed to take each year). On purpose. Click here to read more about our way of thinking.',
    'pto_policies_edit_title_3' => 'The only setting we need to know is the amount of working days each year has, so we can calculate how much holidays the employees gain each day.',
    'pto_policies_edit_title_4' => 'You just need to make sure that for each one of those years below, the amount of days actually worked is correct for your country.',
    'pto_policies_edit_title' => 'All {name} Paid Time Off policies',
    'pto_policies_edit_year' => 'In {year}...',
    'pto_policies_stat_worked_days' => 'worked days',
    'pto_policies_stat_default_holidays' => 'default amount of holidays per employee',
    'pto_policies_stat_default_sick_days' => 'default amount of sick days',
    'pto_policies_stat_default_ptos' => 'default amount of PTOs',
    'pto_policies_stat_days' => '{number} days',
    'pto_policies_edit_default_employee_settings' => 'These are the default settings that will be applied to new employees. This won’t affect existing employees.',
    'pto_policies_edit_default_amount_of_allowed_holidays' => 'Allowed holidays per year',
    'pto_policies_edit_default_amount_of_sick_days' => 'Allowed sick days per year',
    'pto_policies_edit_default_amount_of_pto_days' => 'Allowed personal days per year',
    'pto_policies_edit_click_calendar' => 'Add/remove holidays by clicking in a day in the calendar below',
    'pto_policies_edit_calendar_help' => 'Note: this will affect all employees. We’ll recalculate the balance of holidays for all your employees based any changes you would do here.',
    'pto_policies_month' => 'Month',
    'pto_policies_legend' => 'Legend:',
    'pto_policies_legend_weekend' => 'Weekend',
    'pto_policies_legend_holiday' => 'Holiday',
    'pto_policies_legend_' => 'Add/remove holidays by clicking in a day in the calendar below',
    'pto_policies_edit_total' => 'Employees will have to work a total of {totalWorkedDays} in {year}.',
    'pto_policies_update' => 'The policy has been updated',

    'pronoun_he_him' => 'he/him',
    'pronoun_she_her' => 'she/her',
    'pronoun_they_them' => 'they/them',
    'pronoun_per_per' => 'per/per',
    'pronoun_ve_ver' => 've/ver',
    'pronoun_xe_xem' => 'xe/xem',
    'pronoun_ze_hir' => 'ze/hir',

    'questions_number_questions' => '{company} has {count} questions.',
    'questions_blank' => 'Ask questions about your colleagues so they can know each other better.',
    'questions_title' => 'Questions to get to know your colleagues',
    'questions_description' => 'Only one question can be active at any given time. The current active question will be displayed on the homepage, and only when a question is active can your employees add answer to this question.',
    'questions_cta' => 'Create a new question',
    'questions_form_title_placeholder' => 'What is the movie you enjoy the most?',
    'question_creation_success' => 'The question has been created',
    'question_activate' => 'Set active',
    'question_deactivate' => 'Deactivate the question',
    'question_update_success' => 'The question has been updated',
    'question_confirm_deletion' => 'Are you sure? All answers written by employees will also be permanently deleted.',
    'question_destroy_success' => 'The question has been deleted',
    'question_activate_success' => 'The question is now active',
    'question_deactivate_success' => 'The question is now deactivated',
    'question_status_active' => 'active',
    'question_status_inactive' => 'inactive',
    'question_number_of_answers' => '{count} answer | {count} answer | {count} answers',

    'hardware_title' => 'Manage company hardware',
    'hardware_blank' => 'Here you can keep track of all the hardware your company buys, and whose employee has what.',
    'hardware_description' => 'This is all the hardware that you have in your company.',
    'hardware_create_title' => 'Add a new piece of hardware to your inventory',
    'hardware_all_hardware' => 'All hardware',
    'hardware_available_hardware' => 'Available hardware',
    'hardware_lent_hardware' => 'Lent hardware',
    'hardware_no_serial' => 'No serial number',
    'hardware_not_lent' => 'Item not lent yet',
    'hardware_cta' => 'Add item',
    'hardware_create_name_input' => 'Name of the hardware',
    'hardware_create_serial_input' => 'Serial number (or any other relevant information)',
    'hardware_create_serial_input_help' => 'This will let you identify this hardware in an unique manner.',
    'hardware_create_lend_hardware' => 'Would you like to lend this item to an employee?',
    'hardware_create_lend_name' => 'Choose an employee',
    'hardware_create_success' => 'Hardware has been added to your company',
    'hardware_update_success' => 'Hardware has been updated with success.',
    'hardware_log_hardware_created' => 'Created this item called :name',
    'hardware_log_hardware_updated' => 'Updated the name to :name',
    'hardware_log_hardware_lent' => 'Lent this item to :name',
    'hardware_log_hardware_regained' => 'Took back the item from :name',
    'hardware_show_history' => 'History',
    'hardware_search_placeholder' => 'Find by item name or serial number',
    'hardware_edit_title' => 'Edit an item',

    'expense_categories_title' => 'Expenses management',
    'expense_category_blank' => 'You haven’t configured any expense category yet.',
    'expense_category_headline' => 'Expense categories',
    'expense_category_create_cta' => 'Create a new expense category',
    'expense_category_create_placeholder' => 'Give the expense category a name',
    'expense_category_default_maintenance_and_repairs' => 'Maintenance and repairs',
    'expense_category_default_meals_and_entertainment' => 'Meals and entertainment',
    'expense_category_default_office_expense' => 'Office expense',
    'expense_category_default_travel' => 'Travel',
    'expense_category_default_motor_vehicle_expenses' => 'Motor vehicle expenses',
    'expense_category_success' => 'The expense category has been created.',
    'expense_category_update_success' => 'The expense category has been updated.',
    'expense_category_delete_success' => 'The expense category has been deleted.',
    'expense_employees_headline' => 'Employees who can manage expenses',
    'expense_employees_blank' => 'No employees have the right to manage expenses right now.',
    'expense_employees_create_cta' => 'Add/remove employees',
    'expense_employees_hide_cta' => 'Exit mode',
    'expense_employees_create_label' => 'Add an employee by typing a name below',
    'expense_employees_assign_success' => 'The employee has been added to the list of authorized employees.',
    'expense_employees_unassign_success' => 'The employee has been removed from the list of authorized employees.',

    'general_title' => 'General settings',
    'general_information' => 'Account information',
    'general_name' => 'Company name',
    'general_administrators' => 'Current administrators',
    'general_creation_date' => 'Created',
    'general_rename_company' => 'Change company name',
    'general_rename_input' => 'Give the company a new name',
    'general_rename_success' => 'The company has been renamed.',
    'general_currency_information' => 'Currency',
    'general_currency_information_table' => 'Main currency of the company',
    'general_currency_update' => 'Update currency',
    'general_currency_change_label' => 'Choose a new currency',
    'general_currency_rename_success' => 'The currency has been updated.',
];
