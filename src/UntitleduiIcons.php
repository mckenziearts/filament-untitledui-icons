<?php

declare(strict_types=1);

namespace Mckenziearts\Icons\Untitledui;

use Mckenziearts\Icons\Untitledui\Enums\Untitledui;
use Mckenziearts\Icons\Untitledui\Enums\UntitleduiStyle; 
use Filafly\Icons\IconSet;
use Filament\Actions\View\ActionsIconAlias;
use Filament\Forms\View\FormsIconAlias;
use Filament\Infolists\View\InfolistsIconAlias;
use Filament\Notifications\View\NotificationsIconAlias;
use Filament\Schemas\View\SchemaIconAlias;
use Filament\Support\View\SupportIconAlias;
use Filament\Tables\View\TablesIconAlias;
use Filament\View\PanelsIconAlias;

class UntitleduiIcons extends IconSet
{
    protected string $pluginId = 'mckenziearts-filament-untitledui-icons';

    protected mixed $iconEnum = Untitledui::class;

    protected string $iconPrefix = 'untitledui';

    protected mixed $styleEnum = UntitleduiStyle::class;

    protected array $iconMap = [
        PanelsIconAlias::GLOBAL_SEARCH_FIELD => Untitledui::SearchMd,
        PanelsIconAlias::PAGES_DASHBOARD_ACTIONS_FILTER => Untitledui::FilterFunnel,
        PanelsIconAlias::PAGES_DASHBOARD_NAVIGATION_ITEM => Untitledui::HomeLine,
        // PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN => Untitledui::Replace,
        // PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN_RTL => Untitledui::Replace,
        PanelsIconAlias::RESOURCES_PAGES_EDIT_RECORD_NAVIGATION_ITEM => Untitledui::Edit05,
        PanelsIconAlias::RESOURCES_PAGES_MANAGE_RELATED_RECORDS_NAVIGATION_ITEM => Untitledui::LayersThree,
        PanelsIconAlias::RESOURCES_PAGES_VIEW_RECORD_NAVIGATION_ITEM => Untitledui::Eye,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON => Untitledui::FlexAlignRight,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON_RTL => Untitledui::FlexAlignLeft,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON => Untitledui::FlexAlignLeft,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON_RTL => Untitledui::FlexAlignRight,
        PanelsIconAlias::SIDEBAR_GROUP_COLLAPSE_BUTTON => Untitledui::ChevronUp,
        PanelsIconAlias::TENANT_MENU_BILLING_BUTTON => Untitledui::CreditCard02,
        PanelsIconAlias::TENANT_MENU_PROFILE_BUTTON => Untitledui::Settings02,
        PanelsIconAlias::TENANT_MENU_REGISTRATION_BUTTON => Untitledui::Plus,
        PanelsIconAlias::TENANT_MENU_TOGGLE_BUTTON => Untitledui::ChevronDown,
        PanelsIconAlias::THEME_SWITCHER_LIGHT_BUTTON => Untitledui::Sun,
        PanelsIconAlias::THEME_SWITCHER_DARK_BUTTON => Untitledui::Moon,
        PanelsIconAlias::THEME_SWITCHER_SYSTEM_BUTTON => Untitledui::Monitor02,
        PanelsIconAlias::TOPBAR_CLOSE_SIDEBAR_BUTTON => Untitledui::X,
        // PanelsIconAlias::TOPBAR_OPEN_SIDEBAR_BUTTON => Untitledui::Replace,
        PanelsIconAlias::TOPBAR_GROUP_TOGGLE_BUTTON => Untitledui::ChevronDown,
        PanelsIconAlias::TOPBAR_OPEN_DATABASE_NOTIFICATIONS_BUTTON => Untitledui::Bell,
        // PanelsIconAlias::USER_MENU_PROFILE_ITEM => Untitledui::Replace,
        PanelsIconAlias::USER_MENU_LOGOUT_BUTTON => Untitledui::LogOut,
        PanelsIconAlias::WIDGETS_ACCOUNT_LOGOUT_BUTTON => Untitledui::LogOut,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_DOCUMENTATION_BUTTON => Untitledui::BookClosed,

        // Forms icon aliases
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_CLONE => Untitledui::Copy,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_COLLAPSE => Untitledui::ChevronUp,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_DELETE => Untitledui::Trash03,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_EXPAND => Untitledui::ChevronDown,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_DOWN => Untitledui::ArrowDown,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_UP => Untitledui::ArrowUp,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_REORDER => Untitledui::SwitchVertical02,
        FormsIconAlias::COMPONENTS_CHECKBOX_LIST_SEARCH_FIELD => Untitledui::SearchMd,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_CROP => Untitledui::Crop02,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_MOVE => Untitledui::Move,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_HORIZONTAL => Untitledui::AlignHorizontalCentre,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_VERTICAL => Untitledui::AlignVerticalCenter,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_DOWN => Untitledui::ArrowCircleBrokenDown,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_LEFT => Untitledui::ArrowCircleBrokenLeft,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_RIGHT => Untitledui::ArrowCircleBrokenRight,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_UP => Untitledui::ArrowCircleBrokenUp,
        // FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_LEFT => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_RIGHT => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_100 => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_IN => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_OUT => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_DELETE => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_REORDER => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_CLONE => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_COLLAPSE => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_DELETE => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_EXPAND => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_DOWN => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_UP => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_REORDER => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_SELECT_ACTIONS_CREATE_OPTION => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_SELECT_ACTIONS_EDIT_OPTION => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_HIDE_PASSWORD => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_SHOW_PASSWORD => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_FALSE => Untitledui::Replace,
        // FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_TRUE => Untitledui::Replace,

        // Tables icon aliases
        TablesIconAlias::ACTIONS_COLUMN_MANAGER => Untitledui::Columns03,
        // TablesIconAlias::ACTIONS_DISABLE_REORDERING => Untitledui::Replace,
        // TablesIconAlias::ACTIONS_ENABLE_REORDERING => Untitledui::Replace,
        TablesIconAlias::ACTIONS_FILTER => Untitledui::FilterFunnel02,
        // TablesIconAlias::ACTIONS_GROUP => Untitledui::Replace,
        // TablesIconAlias::ACTIONS_OPEN_BULK_ACTIONS => Untitledui::Replace,
        // TablesIconAlias::COLUMNS_COLLAPSE_BUTTON => Untitledui::Replace,
        // TablesIconAlias::COLUMNS_ICON_COLUMN_FALSE => Untitledui::Replace,
        // TablesIconAlias::COLUMNS_ICON_COLUMN_TRUE => Untitledui::Replace,
        // TablesIconAlias::EMPTY_STATE => Untitledui::Replace,
        // TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_BOOLEAN => Untitledui::Replace,
        // TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_DATE => Untitledui::Replace,
        // TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_NUMBER => Untitledui::Replace,
        // TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_RELATIONSHIP => Untitledui::Replace,
        // TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_SELECT => Untitledui::Replace,
        // TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_TEXT => Untitledui::Replace,
        // TablesIconAlias::FILTERS_REMOVE_ALL_BUTTON => Untitledui::Replace,
        // TablesIconAlias::GROUPING_COLLAPSE_BUTTON => Untitledui::Replace,
        // TablesIconAlias::HEADER_CELL_SORT_ASC_BUTTON => Untitledui::Replace,
        // TablesIconAlias::HEADER_CELL_SORT_BUTTON => Untitledui::Replace,
        // TablesIconAlias::HEADER_CELL_SORT_DESC_BUTTON => Untitledui::Replace,
        // TablesIconAlias::REORDER_HANDLE => Untitledui::Replace,
        TablesIconAlias::SEARCH_FIELD => Untitledui::SearchMd,

        // Notifications icon aliases
        NotificationsIconAlias::DATABASE_MODAL_EMPTY_STATE => Untitledui::BellOff,
        NotificationsIconAlias::NOTIFICATION_CLOSE_BUTTON => Untitledui::X,
        NotificationsIconAlias::NOTIFICATION_DANGER => Untitledui::XCircle,
        NotificationsIconAlias::NOTIFICATION_INFO => Untitledui::InfoCircle,
        NotificationsIconAlias::NOTIFICATION_SUCCESS => Untitledui::CheckCircle,
        NotificationsIconAlias::NOTIFICATION_WARNING => Untitledui::AlertCircle,

        // Actions icon aliases
        ActionsIconAlias::ACTION_GROUP => Untitledui::DotsVertical,
        ActionsIconAlias::CREATE_ACTION_GROUPED => Untitledui::Plus,
        ActionsIconAlias::DELETE_ACTION => Untitledui::Trash03,
        ActionsIconAlias::DELETE_ACTION_GROUPED => Untitledui::Trash03,
        ActionsIconAlias::DELETE_ACTION_MODAL => Untitledui::Trash03,
        ActionsIconAlias::DETACH_ACTION => Untitledui::LinkBroken,
        ActionsIconAlias::DETACH_ACTION_MODAL => Untitledui::LinkBroken,
        ActionsIconAlias::DISSOCIATE_ACTION => Untitledui::LinkBroken,
        ActionsIconAlias::DISSOCIATE_ACTION_MODAL => Untitledui::LinkBroken,
        ActionsIconAlias::EDIT_ACTION => Untitledui::Edit03,
        ActionsIconAlias::EDIT_ACTION_GROUPED => Untitledui::Edit03,
        ActionsIconAlias::EXPORT_ACTION_GROUPED => Untitledui::Upload,
        ActionsIconAlias::FORCE_DELETE_ACTION => Untitledui::Trash03,
        ActionsIconAlias::FORCE_DELETE_ACTION_GROUPED => Untitledui::Trash03,
        ActionsIconAlias::FORCE_DELETE_ACTION_MODAL => Untitledui::Trash03,
        ActionsIconAlias::IMPORT_ACTION_GROUPED => Untitledui::DownloadCloud01,
        ActionsIconAlias::MODAL_CONFIRMATION => Untitledui::AlertTriangle,
        ActionsIconAlias::REPLICATE_ACTION => Untitledui::Copy,
        ActionsIconAlias::REPLICATE_ACTION_GROUPED => Untitledui::Copy,
        ActionsIconAlias::RESTORE_ACTION => Untitledui::ArrowNarrowUpLeft,
        ActionsIconAlias::RESTORE_ACTION_GROUPED => Untitledui::ArrowNarrowUpLeft,
        ActionsIconAlias::RESTORE_ACTION_MODAL => Untitledui::ArrowNarrowUpLeft,
        ActionsIconAlias::VIEW_ACTION => Untitledui::Eye,
        ActionsIconAlias::VIEW_ACTION_GROUPED => Untitledui::Eye,

        // Infolists icon aliases
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_FALSE => Untitledui::XCircle,
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_TRUE => Untitledui::CheckCircle,

        // Schema icon aliases
        SchemaIconAlias::COMPONENTS_WIZARD_COMPLETED_STEP => Untitledui::Check,

        // Support icon aliases
        SupportIconAlias::BADGE_DELETE_BUTTON => Untitledui::X,
        SupportIconAlias::BREADCRUMBS_SEPARATOR => Untitledui::ChevronRight,
        SupportIconAlias::BREADCRUMBS_SEPARATOR_RTL => Untitledui::ChevronLeft,
        SupportIconAlias::MODAL_CLOSE_BUTTON => Untitledui::X,
        SupportIconAlias::PAGINATION_FIRST_BUTTON => Untitledui::ChevronLeftDouble,
        SupportIconAlias::PAGINATION_FIRST_BUTTON_RTL => Untitledui::ChevronRightDouble,
        SupportIconAlias::PAGINATION_LAST_BUTTON => Untitledui::ChevronRightDouble,
        SupportIconAlias::PAGINATION_LAST_BUTTON_RTL => Untitledui::ChevronLeftDouble,
        SupportIconAlias::PAGINATION_NEXT_BUTTON => Untitledui::ChevronRight,
        SupportIconAlias::PAGINATION_NEXT_BUTTON_RTL => Untitledui::ChevronLeft,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON => Untitledui::ChevronLeft,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON_RTL => Untitledui::ChevronRight,
        SupportIconAlias::SECTION_COLLAPSE_BUTTON => Untitledui::ChevronDown,
    ];
}
