<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{AdminController, RoleController, FaQController, DashboardController, ThemeController, LogsController, ConversationController, MessageController, PusherController, CalendarEventController, NotificationController, AirportController};
use App\Http\Controllers\User\{UserController, UserEventsController};
use Laravel\Socialite\Facades\Socialite;

Route::get('user', [UserController::class, 'index'])->name('index.user');
Route::get('user/recrutement', [UserController::class, 'recrutement'])->name('recrutement.user');

Route::prefix('event')->group(function () {
    Route::get('/dubai', [UserEventsController::class, 'dubai'])->name('event.dubai');
    Route::get('/tunisia', [UserEventsController::class, 'tunisia'])->name('event.tunisia');
    Route::get('/london', [UserEventsController::class, 'london'])->name('event.london');
    Route::get('/paris', [UserEventsController::class, 'paris'])->name('event.paris');
    Route::get('/roma', [UserEventsController::class, 'roma'])->name('event.roma');
});

Route::get('/', function () {
    return view('admin.admin_login');
});

require __DIR__ . '/auth.php';

Route::resource('airports', AirportController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/calendar', fn() => view('admin.webapp.calender'))->name('calendar');
    Route::resource('calendar-events', CalendarEventController::class);
    Route::post('/theme/switch', [ThemeController::class, 'switch'])->name('theme.switch');

    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/register', 'addadmin')->name('add.admin');
        Route::get('/admin/manage', 'Ouradmins')->name('Our.admins');
        Route::post('/admin/store', 'Saveadmin')->name('save.admin');
        Route::get('/admin/remove/{id}', 'Delateadmin')->name('delate.admin');
        Route::get('/admin/edit/{id}', 'Editadmin')->name('edit.admin');
        Route::post('/admin/modify/{id}', 'Updateadmin')->name('Update.admin');
        Route::get('/admin/z', 'Addcar')->name('add.car');
        Route::get('/admin/calendar', 'caladner')->name('caladner.add');
        Route::get('/driver/try', 'draiveradd')->name('add');
        Route::get('/admin/task', 'Addmission')->name('add.mission');
        Route::get('/admin/change-password', 'changpassword')->name('change.password');
        Route::post('/admin/profile/update', 'updateprofil')->name('profile.update');
        Route::post('/admin/password/update', 'passwordupdate')->name('password.change');
        Route::get('/admin/profile', 'Adminprofile')->name('admin.profile');
        Route::get('/admin/home', [DashboardController::class, 'AdminDashboard'])->name('admin.dashboard');
    });

    Route::get('/auth/redirect', fn() => Socialite::driver('google')->redirect());
    Route::get('/test-date', [TestController::class, 'test'])->name('test.date');



    Route::controller(RoleController::class)->group(function () {
        Route::get('/all/permission', 'allPermission')->name('all.permission');
        Route::get('/add/permission', 'addpermission')->name('add.permission');
        Route::post('/permission/store', 'storepermission')->name('store.permission');
        Route::get('ad/change/permission/{id}', 'editpermission')->name('edit.permission');
        Route::post('/permission/update', 'updatepermission')->name('update.permission');
        Route::get('/permission/delate/{id}', 'delatepermission')->name('delate.permission');

        Route::get('/all/role', 'allrole')->name('all.role');
        Route::get('/add/role', 'addrole')->name('add.role');
        Route::get('ad/change/role/{id}', 'editrole')->name('edit.role');
        Route::post('/role/update', 'updaterole')->name('update.role');
        Route::get('/role/delate/{id}', 'delaterole')->name('delate.role');
        Route::post('/role/save', 'rolePermissionStore')->name('role.permission.save');
        Route::get('/permission/role', 'addrolespermission')->name('add.roles.permission');
        Route::post('/role/store', 'storerole')->name('save.role');
        Route::get('/all/permission/role', 'allrolespermission')->name('all.roles.permission');
        Route::get('admin/role/editing/{id}', 'admineditrole')->name('admin.edit.role');
        Route::post('admin/role/update/{id}', 'adminroleupdate')->name('admin.role.update');
        Route::get('admin/role/delete/{id}', 'admindeleterole')->name('admin.delete.role');
    });

    Route::post('/broadcast', [PusherController::class, 'broadcast']);
    Route::post('/receive', [PusherController::class, 'receive']);
    Route::post('/send-message', [PusherController::class, 'sendMessage']);
    Route::post('/send-file', [PusherController::class, 'sendFile']);

    Route::get('/users/{id}', [AdminController::class, 'show']);
    Route::get('/conversations/{conversationId}/messages', [MessageController::class, 'getMessages']);
    Route::get('/{id}/conversation', [ConversationController::class, 'showOrCreateConversation'])->name('conversation.show');
    Route::post('/conversations/{conversation}/send-message', [MessageController::class, 'sendMessage']);
    Route::post('/files/{conversationId}', [MessageController::class, 'sendFile']);
    Route::get('/admin/conve', [ConversationController::class, 'index'])->name('chatee.app');
    Route::get('/logs', [LogsController::class, 'index'])->name('logs.index');
});

Route::middleware(['locale'])->group(function () {
    Route::post('/locale/switch', function () {
        session(['locale' => request('locale')]);
        return redirect()->back();
    })->name('locale.switch');
});

Route::get('/notifications/{id}', [NotificationController::class, 'show'])->name('notifications.show');
