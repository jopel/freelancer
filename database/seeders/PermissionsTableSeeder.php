<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 39,
                'title' => 'currency_create',
            ],
            [
                'id'    => 40,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 41,
                'title' => 'currency_show',
            ],
            [
                'id'    => 42,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 43,
                'title' => 'currency_access',
            ],
            [
                'id'    => 44,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 45,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 46,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 47,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 48,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 49,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 50,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 51,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 52,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 53,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 54,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 55,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 56,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 57,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 58,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 59,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 60,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 61,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 62,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 63,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 64,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 65,
                'title' => 'client_create',
            ],
            [
                'id'    => 66,
                'title' => 'client_edit',
            ],
            [
                'id'    => 67,
                'title' => 'client_show',
            ],
            [
                'id'    => 68,
                'title' => 'client_delete',
            ],
            [
                'id'    => 69,
                'title' => 'client_access',
            ],
            [
                'id'    => 70,
                'title' => 'project_create',
            ],
            [
                'id'    => 71,
                'title' => 'project_edit',
            ],
            [
                'id'    => 72,
                'title' => 'project_show',
            ],
            [
                'id'    => 73,
                'title' => 'project_delete',
            ],
            [
                'id'    => 74,
                'title' => 'project_access',
            ],
            [
                'id'    => 75,
                'title' => 'note_create',
            ],
            [
                'id'    => 76,
                'title' => 'note_edit',
            ],
            [
                'id'    => 77,
                'title' => 'note_show',
            ],
            [
                'id'    => 78,
                'title' => 'note_delete',
            ],
            [
                'id'    => 79,
                'title' => 'note_access',
            ],
            [
                'id'    => 80,
                'title' => 'document_create',
            ],
            [
                'id'    => 81,
                'title' => 'document_edit',
            ],
            [
                'id'    => 82,
                'title' => 'document_show',
            ],
            [
                'id'    => 83,
                'title' => 'document_delete',
            ],
            [
                'id'    => 84,
                'title' => 'document_access',
            ],
            [
                'id'    => 85,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 86,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 87,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 88,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 89,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 90,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 91,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 92,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 93,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 94,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 95,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 96,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 97,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 98,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 99,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 100,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 101,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 102,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 103,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 104,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 105,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 106,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 107,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 108,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 109,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 110,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 111,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 112,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 113,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 114,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 115,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 116,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 117,
                'title' => 'product_create',
            ],
            [
                'id'    => 118,
                'title' => 'product_edit',
            ],
            [
                'id'    => 119,
                'title' => 'product_show',
            ],
            [
                'id'    => 120,
                'title' => 'product_delete',
            ],
            [
                'id'    => 121,
                'title' => 'product_access',
            ],
            [
                'id'    => 122,
                'title' => 'team_create',
            ],
            [
                'id'    => 123,
                'title' => 'team_edit',
            ],
            [
                'id'    => 124,
                'title' => 'team_show',
            ],
            [
                'id'    => 125,
                'title' => 'team_delete',
            ],
            [
                'id'    => 126,
                'title' => 'team_access',
            ],
            [
                'id'    => 127,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 128,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 129,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 130,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 131,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 132,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 133,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 134,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 135,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 136,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 137,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 138,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 139,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 140,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 141,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 142,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 143,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 144,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 145,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 146,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 147,
                'title' => 'asset_create',
            ],
            [
                'id'    => 148,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 149,
                'title' => 'asset_show',
            ],
            [
                'id'    => 150,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 151,
                'title' => 'asset_access',
            ],
            [
                'id'    => 152,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 153,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 154,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 155,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 156,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 157,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 158,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 159,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 160,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 161,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 162,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 163,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 164,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 165,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 166,
                'title' => 'task_create',
            ],
            [
                'id'    => 167,
                'title' => 'task_edit',
            ],
            [
                'id'    => 168,
                'title' => 'task_show',
            ],
            [
                'id'    => 169,
                'title' => 'task_delete',
            ],
            [
                'id'    => 170,
                'title' => 'task_access',
            ],
            [
                'id'    => 171,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 172,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 173,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 174,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 175,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 176,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 177,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 178,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 179,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 180,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 181,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 182,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 183,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 184,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 185,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 186,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 187,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 188,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 189,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 190,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 191,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 192,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 193,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 194,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 195,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 196,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 197,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 198,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 199,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 200,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 201,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 202,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 203,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 204,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 205,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 206,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 207,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 208,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 209,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 210,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 211,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 212,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 213,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 214,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 215,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 216,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 217,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 218,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 219,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 220,
                'title' => 'expense_create',
            ],
            [
                'id'    => 221,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 222,
                'title' => 'expense_show',
            ],
            [
                'id'    => 223,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 224,
                'title' => 'expense_access',
            ],
            [
                'id'    => 225,
                'title' => 'income_create',
            ],
            [
                'id'    => 226,
                'title' => 'income_edit',
            ],
            [
                'id'    => 227,
                'title' => 'income_show',
            ],
            [
                'id'    => 228,
                'title' => 'income_delete',
            ],
            [
                'id'    => 229,
                'title' => 'income_access',
            ],
            [
                'id'    => 230,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 231,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 232,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 233,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 234,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 235,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 236,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 237,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 238,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 239,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 240,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 241,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 242,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 243,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 244,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 245,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 246,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
